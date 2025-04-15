<?php session_start(); ?>
<?php
include('db.php');
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// Fetch user data from the database
$username = $_SESSION["username"];
$sql = "SELECT profile_image, favorites FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($profile_image, $favorites);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/logo_php.css" />
    <link rel="icon" href="../images/logo_image_1.jpg" type="image/jpg">
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="container">
      <a href="home.html" class="logo"><img src="../images/logo_image_1.jpg" alt="Tour Starter Logo" class="logo-img">TOUR STARTER</a>
      <nav>
        <ul>
          <li><a href="../phpHtml/home.php">Home</a></li>
          <li><a href="../phpHtml/Gallery.php">Gallery</a></li>
          <li><a href="../phpHtml/about.php">About</a></li>
          <li><a href="../phpHtml/contact.php">Contact</a></li>
          <?php if (isset($_SESSION["username"])): ?>
            <li class="profile-img-li">
                <a href="profile.php" class="profile-link">
                    <img src="../profile_images/<?php echo $_SESSION['profile_image']; ?>" alt="User Profile Image" class="profile-img-corner">
                </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>


  <!-- Welcome Message -->
  <div class="welcome-banner">
  <h1>Welcome to your profile!</h1>
  </div>
  <!-- Profile Content Section -->
  <div class="profile-container">
    <!-- Left Side (Profile Image and Info) -->
    <div class="profile-left">
      <img src="../profile_images/<?php echo $profile_image; ?>" alt="Profile Image" class="profile-img">
      <div class="profile-container-second">
        <div class="profile-box">
          <h2><?php echo htmlspecialchars($username); ?></h2>
          <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION["email"]); ?></p>
          <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" class="logout-btn">Logout</button>
          </form>
        </div>
      </div>
      
    </div>

    <!-- Right Side (Favorites Section) -->
    <div class="profile-right">
      <h3>Your Favorite Destinations</h3>
      <?php if ($favorites): ?>
          <ul>
          <?php 
            $favorite_list = explode(',', $favorites);
            for ($i = 0; $i < count($favorite_list); $i += 2) {
              $place = htmlspecialchars($favorite_list[$i]);
              $country = isset($favorite_list[$i + 1]) ? htmlspecialchars($favorite_list[$i + 1]) : '';
              echo "<li>• $place, $country ❤️</li>";
            }     
          ?>
          </ul>
      <?php else: ?>
          <p>You have no favorite destinations yet.</p>
      <?php endif; ?>
    </div>

    <!-- Blog Post Section -->
<div class="profile-blog">
  <h3>Write a Travel Blog</h3>
  <form class="blog-form">
    <input type="text" name="blog_title" placeholder="Blog Title" required>
    <textarea name="blog_content" placeholder="Share your travel story..." rows="5" required></textarea>
    <button type="submit" disabled>Post Blog</button>
  </form>

  <h3>Your Blogs</h3>
  <div class="blog-post">
    <h4>My First Trip to Japan</h4>
    <p>Exploring Tokyo and Kyoto was like stepping into a different world. The food, the culture, everything was amazing!</p>
    <small>Posted on: April 10, 2025</small>
  </div>

  <div class="blog-post">
    <h4>A Weekend in Paris</h4>
    <p>From the Eiffel Tower to the charming cafes, Paris truly lives up to its romantic reputation.</p>
    <small>Posted on: March 25, 2025</small>
  </div>
</div>
  </div>
</body>
</html>
