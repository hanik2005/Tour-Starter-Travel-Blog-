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
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css" />
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

    <div class="main-content">
    <h1>Let's Connect!</h1>
    <p>
      Got a travel question, a story to share, or want to collaborate with us? We'd love to hear from you! 
      Fill out the form below and our team will get back to you as soon as we can.
    </p>

    <div class="contact-form-wrapper">
      <!-- Contact Information Sidebar -->
      <div class="contact-info">
        <h2>Reach Out to Tour Starter</h2>
        <p>Whether you're looking for travel tips, want to partner with us, or simply want to say hello — we're all ears!</p>

        <h3>Collaboration & Media</h3>
        <div class="contact-details">
          <i class="ri-mail-fill"></i>
          <a href="mailto:collab@tourstarter.com">collab@tourstarter.com</a>
        </div>

        <h3>Share Your Travel Story</h3>
        <p>Got an amazing travel experience? Submit your story and get featured on our blog!</p>

        <div class="social-icons">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <form>
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" placeholder="Your Name" required />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="you@travelmail.com" required />
          </div>

          <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" rows="6" placeholder="Tell us how we can help, or share your travel experience..." required></textarea>
          </div>

          <div class="form-group checkbox-group">
            <label for="featureConsent" class="text_box">I’d like to be featured on the blog</label>
            <input type="checkbox" id="featureConsent" />
          </div>

          <div class="form-group checkbox-group">
            <label for="subscribe" class="text_box">Subscribe to our travel newsletter</label>
            <input type="checkbox" id="subscribe" />
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
