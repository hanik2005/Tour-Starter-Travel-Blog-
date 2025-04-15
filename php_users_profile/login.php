<?php include 'db.php'; session_start(); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user["password"])) {
    $_SESSION["username"] = $user["username"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["profile_image"] = $user["profile_image"];
    $_SESSION['user_id'] = $user['user_id'];
    header("Location: profile.php");
    exit;
  } else {
    $error = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="icon" href="../images/logo_image_1.jpg" type="image/jpg">
</head>
<body>
  <div class="login-container">
    <form method="POST" action="" class="login-form">
      <h2>Login</h2>

      <?php if (!empty($error)): ?>
        <p class="error-msg"><?php echo $error; ?></p>
      <?php endif; ?>

      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>

      <p class="register-link">Don’t have an account? <a href="register.php">Register here</a></p>
      <p class="register-link">Do you want to go back? <a href="../home.html">back</a></p>
    </form>
  </div>
</body>
</html>
