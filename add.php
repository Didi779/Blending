<!-- Beginning of php script-->
<?php
session_start(); // Start a new session or resume the existing session to store user information
if (!isset($_SESSION['username'])) { // Check if the 'username' session variable is not set
    header("Location: index.php"); // Redirect the user to the index page if not logged in
    exit(); // Stop further script execution after the redirect
}
?>
<!--End of php script-->


<!DOCTYPE html> <!-- Declare the document type as HTML5 -->
<html lang="en"> <!-- Set the language of the document to English -->
<head> <!-- Start of the head section -->
    <meta charset="UTF-8"> <!-- Set the character encoding for the document to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set the viewport for responsive design -->
    <title>Add Blending Data</title> <!-- Title of the page that appears in the browser tab -->

    <style> /* Start of CSS for styling */
        * {
            margin: 0; /* Remove default margin for all elements */
            padding: 0; /* Remove default padding for all elements */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            font-family: 'Arial', sans-serif; /* Set the default font for the document */
        }
        /* Styling for the body of the page */
        body {
            background-color: white; /* Set the background color of the body */
            display: flex; /* Use flexbox layout */
            flex-direction: column; /* Arrange children in a column */
            align-items: center; /* Center children horizontally */
            justify-content: center; /* Center children vertically */
            height: 100vh; /* Set the height to 100% of the viewport height */
            padding-top: 80px; /* Add padding to the top */
        } /* End of body styling */

        /* Styling for the navigation Bar */
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
            gap: 50px; /* Add space between links */
        }

        .nav-links a {
            text-decoration: none; /* Remove underline from links */
            color: black; /* Set link color to black */
            font-size: 18px; /* Set font size for links */
            font-weight: bold; /* Make links bold */
            transition: 0.3s; /* Add transition effect for hover */
        }

        .nav-links a:hover {
            color: grey; /* Change link color on hover */
        }
        /* End of navigation styling */

        /* Styling for the logout element */
        .logout {
            display: flex; /* Use flexbox layout */
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
        /* End of logout styling */

        /* This styling will apply to the form Container */
        .form-container {
            width: 50vw; /* Set width to 50% of the viewport width */
            padding: 30px; /* Add padding inside the container */
            background: white; /* Set background color to white */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow effect */
            border-radius: 8px; /* Round the corners */
        }

        h2 { 
            text-align: center; /* Center the heading text */
            color: black; /* Set heading color to black */
            margin-bottom: 20px; /* Add space below the heading */
            font-size: 24px; /* Set font size for the heading */
        }

        label {
            font-weight: bold; /* Make label text bold */
            color: black; /* Set label color to black */
            display: block; /* Make label a block element */
            margin-top: 10px; /* Add space above the label */
        }

        input, select {
            width: 100%; /* Set width to 100% of the container */
            padding: 12px; /* Add padding inside input/select */
            margin-top: 5px; /* Add space above input/select */
            border: 2px solid grey; /* Set border color */
            border-radius: 5px; /* Round the corners */
            font-size: 16px; /* Set font size */
        }

        .button-container {
            display: flex; /* Use flexbox layout */
            justify-content: space-between; /* Space buttons evenly */
            margin-top: 20px; /* Add space above the button container */
        }

        button {
            width: 48%; /* Set width to 48% of the container */
            padding: 12px; /* Add padding inside the button */
            border: none; /* Remove border */
            background: grey; /* Set background color */
            color: white; /* Set text color to white */
            font-size: 16px; /* Set font size */
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: 0.3s; /* Add transition effect for hover */
            border-radius: 5px; /* Round the corners */
        }

        button:hover {
            background: black; /* Change background color on hover */
        }
    </style>   <!-- End of CSS -->
    
</head> <!-- End of the head tag -->


<!-- Now that the head part of the page is done, we move to the body part of the page. -->
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="nav-links"> <!-- Div to contain navigation links -->
            <a href="dashboard.php">Home</a> <!-- Link to the dashboard page -->
            <a href="reports.php">Reports</a> <!-- Link to the reports page -->
            <a href="#" onclick="goBack()">Back</a> <!-- Link to go back to the previous page -->
        </div>

        <div class="logout" onclick="logout()"> <!-- Logout section with click event -->
            <img src="OIP.jfif" alt="User  Icon"> <!-- User icon image -->
            <span>LOGOUT</span> <!-- Logout text -->
        </div>
    </nav>
    <!-- End of navigation bar -->

    <!-- Form Container -->
    <div class="form-container"> <!-- Container for the form -->
        <h2>Add Blending Data</h2> <!-- Heading for the form -->
        <form action="data_add.php" method="POST"> <!-- Form that submits data to data_add.php using POST method -->
            <label for="order_no">Order No:</label> <!-- Label for the order number input -->
            <input type="text" id="order_no" name="order_no" required> <!-- Input for order number, required field -->

            <label for="base_tank">Base Tank:</label> <!-- Label for the base tank input -->
            <input type="text" id="base_tank" name="base_tank" required> <!-- Input for base tank, required field -->

            <label for="product">Product:</label> <!-- Label for the product input -->
            <input type="text" id="product" name="product" required> <!-- Input for product, required field -->

            <label for="flushed">Flushed:</label> <!-- Label for the flushed dropdown -->
            <select id="flushed" name="flushed"> <!-- Dropdown for flushed option -->
                <option value="Yes">Yes</option> <!-- Option for Yes -->
                <option value="No">No</option> <!-- Option for No -->
            </select>

            <!-- Button container for submit and cancel buttons -->
            <div class="button-container">
                <button type="submit">Submit</button> <!-- Submit button for the form -->
                <button type="button" onclick="goBack()">Cancel</button> <!-- Cancel button that triggers goBack function -->
            </div>
        </form> <!-- End of form -->
    </div>

    <script> /* Start of JavaScript for interactivity */
        function goBack() { /* Function to navigate back to the dashboard */
            window.location.href = "dashboard.php"; /* Redirect to dashboard page */
        }

        function logout() { /* Function to log out the user */
            window.location.href = "logout.php"; /* Redirect to logout page */
        }
    </script> <!-- End of JavaScript -->

</body> <!-- End of the body -->
</html> <!-- End of the HTML page -->
