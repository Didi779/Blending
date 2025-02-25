<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$servername = "localhost";
$username = "root"; // Change this if necessary
$password = ""; // Change this if necessary
$database = "blending_db"; // Make sure you have created this database

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$order_no = $_POST['order_no'];
$base_tank = $_POST['base_tank'];
$product = $_POST['product'];
$flushed = $_POST['flushed'];

$sql = "INSERT INTO blending_data (order_no, base_tank, product, flushed) VALUES ('$order_no', '$base_tank', '$product', '$flushed')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data added successfully!'); window.location.href='dashboard.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
