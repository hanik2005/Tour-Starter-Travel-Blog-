<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];
$destination = $_POST['destination'];

// Fetch existing favorites
$stmt = $conn->prepare("SELECT favorites FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($existingFavorites);
$stmt->fetch();
$stmt->close();

// Append new destination (avoid duplicates)
$favArray = $existingFavorites ? explode(",", $existingFavorites) : [];
if (!in_array($destination, $favArray)) {
  $favArray[] = $destination;
}

$newFavorites = implode(",", $favArray);

// Update favorites in DB
$stmt = $conn->prepare("UPDATE users SET favorites = ? WHERE user_id = ?");
$stmt->bind_param("si", $newFavorites, $user_id);
$stmt->execute();
$stmt->close();

header("Location: ../php_users_profile/profile.php");
?>
