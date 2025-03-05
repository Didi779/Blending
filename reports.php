<?php
$servername = "localhost"; // Set the database server name
$username = "root"; // Set the database username
$password = ""; // Set the database password
$database = "blending_db"; // Set the name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $database); // Create a new MySQLi connection

// Check connection
if ($conn->connect_error) { // Check if there was a connection error
    die("Connection failed: " . $conn->connect_error); // Terminate the script and display an error message if connection fails
}

// Fetch blends
$sql = "SELECT id, order_no, base_tank, product, flushed FROM blending_data"; // SQL query to select data from the blending_data table
$result = $conn->query($sql); // Execute the SQL query and store the result
?>

<!DOCTYPE html> <!-- Declare the document type as HTML5 -->
<html lang="en"> <!-- Set the language of the document to English -->
<head> <!-- Start of the head section -->
    <meta charset="UTF-8"> <!-- Set the character encoding for the document to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set the viewport for responsive design -->
    <title>Reports</title> <!-- Title of the page that appears in the browser tab -->
    <style> <!-- Start of CSS for styling -->
        * {
            margin: 0; /* Remove default margin for all elements */
            padding: 0; /* Remove default padding for all elements */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            font-family: 'Arial', sans-serif; /* Set the default font for the document */
        }

        body {
            background-color: #f9f9f9; /* Set the background color of the body */
            display: flex; /* Use flexbox layout */
            flex-direction: column; /* Arrange children in a column */
            align-items: center; /* Center children horizontally */
            padding-top: 80px; /* Add padding to the top of the body */
        }

        /* 🔹 Navigation Bar */
        nav {
            position: fixed; /* Fix the navigation bar to the top of the viewport */
            top: 0; /* Position it at the top */
            left: 0; /* Position it at the left */
            width: 100%; /* Set the width to 100% of the viewport */
            background-color: white; /* Set the background color of the nav */
            border-bottom: 2px solid grey; /* Add a bottom border */
            display: flex; /* Use flexbox layout */
            justify-content: space-between; /* Space out children evenly */
            align-items: center; /* Center children vertically */
            padding: 15px 50px; /* Add padding to the nav */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add a shadow effect */
            z-index: 1000; /* Ensure the nav is above other elements */
        }

        .nav-links {
            display: flex; /* Use flexbox layout for nav links */
            gap: 40px; /* Add space between links */
        }

        .nav-links a {
            text-decoration: none; /* Remove underline from links */
            color: black; /* Set link color to black */
            font-size: 16px; /* Set font size for links */
            font-weight: bold; /* Make links bold */
            transition: 0.3s; /* Add transition effect for hover */
        }

        .nav-links a:hover {
            color: grey; /* Change link color on hover */
        }

        .logout {
            display: flex; /* Use flexbox layout for logout section */
            align-items: center; /* Center items vertically */
            color: black; /* Set text color to black */
            font-size: 14px; /* Set font size */
            font-weight: bold; /* Make text bold */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        .logout img {
            width: 20px; /* Set width for the logout icon */
            margin-right: 5px; /* Add space to the right of the icon */
        }

        /* 🔹 Table Styling */
        .title {
            text-align: center; /* Center the title text */
            font-size: 24px; /* Set font size for the title */
            font-weight: bold; /* Make title bold */
            color: black; /* Set title color to black */
            margin: 20px 0; /* Add vertical margin around the title */
        }

        table {
            width: 90%; /* Set width to 90% of the container */
            border-collapse: collapse; /* Collapse table borders */
            background: white; /* Set background color to white */
            border-radius: 5px; /* Round the corners of the table */
            overflow: hidden; /* Hide overflow */
            margin-top: 10px; /* Add space above the table */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow effect to the table */
        }

        th {
            background: #333; /* Set background color for table headers */
            color: white; /* Set text color for table headers */
            padding: 12px; /* Add padding inside table headers */
            text-align: left; /* Align text to the left */
        }

        td {
            padding: 10px; /* Add padding inside table cells */
            border-bottom: 1px solid #ddd; /* Add bottom border to table cells */
            color: #333; /* Set text color for table cells */
        }

        tr:hover {
            background-color: #f1f1f1; /* Change background color on row hover */
        }

        .no-data {
            color: grey; /* Set text color for no data message */
            font-weight: bold; /* Make no data message bold */
            text-align: center; /* Center the no data message */
        }
    </style> <!-- End of CSS -->
</head>
<body>

    <!-- 🔹 Navigation Bar -->
    <nav>
        <div class="nav-links"> <!-- Container for navigation links -->
            <a href="dashboard.php">Home</a> <!-- Link to the dashboard page -->
            <a href="reports.php">Reports</a> <!-- Link to the reports page -->
            <a href="#" onclick="goBack()">Back</a> <!-- Link to go back to the previous page -->
        </div>

        <div class="logout" onclick="logout()"> <!-- Logout section with click event -->
            <img src="OIP.jfif" alt="User  Icon"> <!-- User icon image -->
            <span>LOGOUT</span> <!-- Logout text -->
        </div>
    </nav>

    <div class="title">Blending Reports</div> <!-- Title for the reports section -->

    <table> <!-- Start of the table to display blending data -->
        <tr> <!-- Table header row -->
            <th>ID</th> <!-- Column header for ID -->
            <th>Order No</th> <!-- Column header for Order Number -->
            <th>Base Tank</th> <!-- Column header for Base Tank -->
            <th>Product</th> <!-- Column header for Product -->
            <th>Flushed</th> <!-- Column header for Flushed status -->
        </tr>
        <?php
        if ($result->num_rows > 0) { // Check if there are any rows returned from the query
            while ($row = $result->fetch_assoc()) { // Fetch each row as an associative array
                echo "<tr> <!-- Start of a new table row -->
                        <td>{$row['id']}</td> <!-- Display ID -->
                        <td>{$row['order_no']}</td> <!-- Display Order Number -->
                        <td>{$row['base_tank']}</td> <!-- Display Base Tank -->
                        <td>{$row['product']}</td> <!-- Display Product -->
                        <td>{$row['flushed']}</td> <!-- Display Flushed status -->
                      </tr>"; // End of the table row
            }
        } else {
            // If no rows are returned, display a message
            echo "<tr><td colspan='5' class='no-data'>No blends recorded</td></tr>"; // Display no data message spanning all columns
        }
        ?>
    </table> <!-- End of the table -->

    <script>
        function logout() { // Function to handle user logout
            window.location.href = "logout.php"; // Redirect to the logout page
        }

        function goBack() { // Function to go back to the previous page
            if (document.referrer) { // Check if there is a referrer
                window.history.back(); // Go back to the previous page in history
            } else {
                window.location.href = "dashboard.php"; // Redirect to dashboard if no history
            }
        }
    </script> <!-- End of JavaScript -->

</body>
</html>

<?php
$conn->close(); // Close the database connection
?>
