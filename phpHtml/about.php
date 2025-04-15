<?php session_start(); ?>
<?php
if (!isset($_SESSION["username"])) {
  header("Location: ../php_users_profile/login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us</title>
  <link rel="stylesheet" href="../css/about.css" />
  <link rel="stylesheet" href="../css/profile.css" />
  <link rel="stylesheet" href="../css/logo_php.css" />
  <link rel="icon" href="../images/logo_image_1.jpg" type="image/jpg">
</head>
<body>

<header>
  <div class="container">
    <a href="home.html" class="logo"><img src="../images/logo_image_1.jpg" alt="Tour Starter Logo" class="logo-img">TOUR STARTER</a>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION["username"])): ?>
            <li class="profile-img-li">
                <a href="../php_users_profile/profile.php" class="profile-link">
                    <img src="../profile_images/<?php echo $_SESSION['profile_image']; ?>" alt="User Profile Image" class="profile-img-corner">
                </a>
            </li>
          <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>

<main>
  <div class="about-section">
    <div class="about-text">
      <h1>About Us</h1>
      <p>We are a group of passionate IT students collaboratively designing and developing a modern, responsive travel website as part of our academic project. This website aims to showcase breathtaking travel destinations from around the world using clean, efficient code and a user-friendly layout.</p>
      <p>By leveraging technologies such as HTML, CSS, and PHP, we are not only applying our theoretical knowledge but also gaining valuable hands-on experience in front-end web development, responsive design, and teamwork. Our goal is to create a visually captivating and fully functional website that reflects real-world standards and practices in the tech industry.</p>
    </div>

    <div class="about-image">
      <img src="../images/about_1.jpg" alt="Canadian Rockies" class="portrait" />
    </div>
  </div>
</main>

<footer>
  <div class="container">
    <div>
      <h3>Tour Starter</h3>
      <p>Curating exceptional travel experiences since 2010.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div>
      <h3>Contact Us</h3>
      <p>Cagayan de Oro, Carmen, PHINMA COC</p>
      <p>+63 99199754558</p>
      <p>yocyocjoker@gmail.com</p>
    </div>
    <div>
      <h3>Newsletter</h3>
      <p>Subscribe for travel tips and offers.</p>
      <input type="email" placeholder="Your email">
      <button>Subscribe</button>
    </div>
  </div>
</footer>

</body>
</html>
