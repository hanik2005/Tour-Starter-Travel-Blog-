<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if password and confirm password match
    if ($password != $confirm_password) {
        $message = "<p class='error'>Passwords do not match. Please try again.</p>";
    } else {
        // If passwords match, hash the password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Handle image upload
        $image_name = $_FILES["profile_image"]["name"];
        $image_tmp = $_FILES["profile_image"]["tmp_name"];
        $image_folder = "../profile_images/" . basename($image_name);

        if (move_uploaded_file($image_tmp, $image_folder)) {
            // Insert into database
            $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password, profile_image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $fullname, $email, $username, $password_hash, $image_name);

            if ($stmt->execute()) {
                $message = "<p class='success'>Registered successfully! <a href='login.php'>Login here</a></p>";
            } else {
                $message = "<p class='error'>Error: " . $stmt->error . "</p>";
            }

            $stmt->close();
        } else {
            $message = "<p class='error'>Image upload failed.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link rel="stylesheet" href="../css/register.css">
  <link rel="icon" href="../images/logo_image_1.jpg" type="image/jpg">
</head>
<body>
  <div class="form-container">
    <form method="POST" action="" enctype="multipart/form-data">
      <h2>Register</h2>
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      
      <label class="file-label">Upload Profile Image</label>
      <input type="file" name="profile_image" accept="image/*" required>
      
      <button type="submit">Register</button>
      <?php if (isset($message)) { echo $message; } ?>
      <p class="login-link">Do you want to go back? <a href="../php_users_profile/login.php">back</a></p>
    </form>
  </div>
</body>
</html>
