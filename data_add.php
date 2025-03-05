<?php 
session_start(); // Start a new session or resume the existing session to store user information

// Check if the 'username' session variable is not set
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect the user to the index page if not logged in
    exit(); // Stop further script execution after the redirect
}

// Database connection parameters
$servername = "localhost";  // Database server name
$username = "root"; // Database username
$password = ""; // Database password
$database = "blending_db"; // Database name

// Create a new mysqli connection
$conn = new mysqli($servername, $username, $password, $database); 

// Check for connection errors
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error); // Terminate the script and display error message if connection fails
}

// Retrieve form data from POST request
$order_no = $_POST['order_no'];  // Get the order number from the form
$base_tank = $_POST['base_tank']; // Get the base tank from the form
$product = $_POST['product']; // Get the product from the form
$flushed = $_POST['flushed']; // Get the flushed status from the form

// SQL query to insert data into the blending_data table
$sql = "INSERT INTO blending_data (order_no, base_tank, product, flushed) VALUES ('$order_no', '$base_tank', '$product', '$flushed')"; 

// Execute the SQL query and check if it was successful
if ($conn->query($sql) === TRUE) {  
    // If the query was successful, display a success message and redirect to the dashboard
    echo "<script>alert('Data added successfully!'); window.location.href='dashboard.php';</script>";
} else { 
    // If there was an error, display the error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close(); 
?>
