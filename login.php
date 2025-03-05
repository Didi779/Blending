<?php
session_start(); // Start a new session or resume the existing session to store user information

// Dummy user credentials 
$valid_username = "admin"; // Set a valid username for comparison
$valid_password = "password123"; // Set a valid password for comparison

// Get input values from the POST request, using null coalescing operator to avoid undefined index notices
$username = $_POST['username'] ?? ''; // Retrieve the username from the form submission
$password = $_POST['password'] ?? ''; // Retrieve the password from the form submission

// Validate credentials
if ($username === $valid_username && $password === $valid_password) { // Check if the input matches the valid credentials
    $_SESSION['username'] = $username; // Store the username in the session for future reference
    header("Location: dashboard.php"); // Redirect the user to the dashboard page
    exit(); // Stop further script execution after the redirect
} else {
    // If the credentials are invalid, show an alert and redirect to the index page
    echo "<script>alert('Invalid username or password!'); window.location.href='index.php';</script>";
}
?>
