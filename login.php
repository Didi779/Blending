<?php
session_start();

// Dummy user credentials (Replace with database validation)
$valid_username = "admin";
$valid_password = "password123";

// Get input values
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username; // Store session
    header("Location: dashboard.php"); // Redirect to dashboard
    exit();
} else {
    echo "<script>alert('Invalid username or password!'); window.location.href='index.php';</script>";
}
?>
