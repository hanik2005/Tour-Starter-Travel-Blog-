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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tour Starter</title>
  <link rel="stylesheet" href="../css/home_php.css" />
  <link rel="stylesheet" href="../css/profile.css" />
  <link rel="stylesheet" href="../css/logo_php.css" />
  <link rel="icon" href="../images/logo_image_1.jpg" type="image/jpg">
</head>
<body>
  <div class="hero-section">
    <header class="header">
      <div class="container">
        <a href="home.php" class="logo"><img src="../images/logo_image_1.jpg" alt="Tour Starter Logo" class="logo-img">TOUR STARTER</a>
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

    <div class="hero-content">
      <h1>Travel Website</h1>
      <h2>Around the World</h2>
      <p>Read travel experiences from fellow travelers!</p>
    </div>

    <div class="blog-section" style="padding: 40px;">
      <div class="blog-post" style="margin-bottom: 40px;">
        <h2>Exploring the Streets of Paris</h2>
        <p><strong>By:</strong> Maria Lopez | March 15, 2025</p>
        <img src="../images/img_home_1.jpg" alt="Paris Street" width="300" />
        <p>The Eiffel Tower was stunning! I spent hours walking through the streets, enjoying fresh pastries and beautiful views. The art and culture here are like no other.</p>
      </div>

      <div class="blog-post" style="margin-bottom: 40px;">
        <h2>Hiking in the Alps</h2>
        <p><strong>By:</strong> David Chan | February 22, 2025</p>
        <img src="../images/img_home_2.jpg" alt="Alps Hiking" width="300" />
        <p>The cold breeze, the snow-covered trails, and the peaceful silence of nature... hiking in the Alps was a dream come true. I can't wait to return in the summer!</p>
      </div>

      <div class="blog-post" style="margin-bottom: 40px;">
        <h2>Sunsets in Bali</h2>
        <p><strong>By:</strong> Aria Mendoza | January 5, 2025</p>
        <img src="../images/img_home_3.png" alt="Bali Sunset" width="300" />
        <p>Watching the sun dip below the ocean in Bali was breathtaking. The local food, the friendly people, and the beach vibes made this trip unforgettable.</p>
      </div>
    </div>
  </div>
  <footer>
  <div class="container">
    <div>
      <h3>Tour Starter</h3>
      <p>Curating exceptional travel experiences since 2010.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Destinations</a></li>
        <li><a href="#">Travel Guides</a></li>
        <li><a href="#">About Us</a></li>
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
