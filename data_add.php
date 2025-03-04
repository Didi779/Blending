<?php // Beginning of php session to store user information.
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$servername = "localhost";  //Servername is localhost because this is ran on a local server.
$username = "root"; 
$password = ""; //Because the database has no password, this is left blank.
$database = "blending_db"; //Name of the created database

$conn = new mysqli($servername, $username, $password, $database);  //This is to establish the database connection.

if ($conn->connect_error) {   //This line is there to catch errors, if the connection to the database is not established, a user should be alerted.
    die("Connection failed: " . $conn->connect_error);
}

$order_no = $_POST['order_no'];  //Post method is a predifined method used to retrive information from the database.
$base_tank = $_POST['base_tank'];
$product = $_POST['product'];
$flushed = $_POST['flushed'];

$sql = "INSERT INTO blending_data (order_no, base_tank, product, flushed) VALUES ('$order_no', '$base_tank', '$product', '$flushed')"; //This line is used to insert information into the table.

if ($conn->query($sql) === TRUE) {  //This statement is used to alert the browser that if a user has successfully added to the database, they should get an alert.
    echo "<script>alert('Data added successfully!'); window.location.href='dashboard.php';</script>";
} else {  //If adding to the database is unsuccessful, then an error message should come up.
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); //end of database connection.
?>
