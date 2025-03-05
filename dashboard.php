<!DOCTYPE html> <!-- Declare the document type as HTML5 -->
<html lang="en"> <!-- Set the language of the document to English -->
<head> <!-- Start of the head section -->
    <meta charset="UTF-8"> <!-- Set the character encoding for the document to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set the viewport for responsive design -->
    <title>Blending Monitor Dashboard</title> <!-- Title of the page that appears in the browser tab -->
    <style> <!-- Start of CSS for styling -->
        * {
            margin: 0; /* Remove default margin for all elements */
            padding: 0; /* Remove default padding for all elements */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            font-family: 'Arial', sans-serif; /* Set the default font for the document */
        }
        /* This is the beginning of the body of the page */
        body {
            background-color: white; /* Set the background color of the body */
            display: flex; /* Use flexbox layout */
            justify-content: center; /* Center children horizontally */
            align-items: center; /* Center children vertically */
            height: 100vh; /* Set the height to 100% of the viewport height */
            flex-direction: column; /* Arrange children in a column */
        }

        /* Navigation Bar */
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

        /* Styling for the dashboard Container */
        .dashboard-container {
            width: 60vw; /* Set width to 60% of the viewport width */
            height: 60vh; /* Set height to 60% of the viewport height */
            background: white; /* Set background color to white */
            padding: 20px; /* Add padding inside the container */
            display: flex; /* Use flexbox layout */
            flex-direction: column; /* Arrange children in a column */
            justify-content: center; /* Center children vertically */
            align-items: center; /* Center children horizontally */
            position: relative; /* Set position to relative for absolute positioning of children */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add subtle shadow effect */
            margin-top: 80px; /* Add space above the dashboard container */
            border-radius: 8px; /* Round the corners of the container */
        }

        .top-section {
            display: flex; /* Use flexbox layout */
            align-items: center; /* Center items vertically */
            justify-content: flex-start; /* Align items to the start */
            width: 100%; /* Set width to 100% of the container */
            padding: 10px 20px; /* Add padding inside the top section */
        }

        .logo {
            width: 150px; /* Set width for the logo */
            height: auto; /* Maintain aspect ratio */
            position: absolute; /* Position logo absolutely within the container */
            top: 10px; /* Position logo 10px from the top */
            left: 10px; /* Position logo 10px from the left */
        }

        .title {
            font-size: 28px; /* Set font size for the title */
            font-weight: bold; /* Make title bold */
            color: black; /* Set title color to black */
            border-top: 2px solid grey; /* Add top border */
            border-bottom: 2px solid grey; /* Add bottom border */
            padding: 10px 0; /* Add vertical padding */
            flex-grow: 1; /* Allow title to grow and take available space */
            text-align: center; /* Center the title text */
        }

        /* Styling for the button Container */
        .button-container {
            display: flex; /* Use flexbox layout */
            justify-content: center; /* Center buttons horizontally */
            gap: 30px; /* Add space between buttons */
            margin-top: 40px; /* Add space above the button container */
        }

        .button-container button {
            width: 120px; /* Set width for buttons */
            height: 50px; /* Set height for buttons */
            background: grey; /* Set background color for buttons */
            border: none; /* Remove border */
            font-size: 18px; /* Set font size for buttons */
            color: white; /* Set text color to white */
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: 0.3s; /* Add transition effect for hover */
            border-radius: 5px; /* Round the corners of the buttons */
        }

        .button-container button:hover {
            background: black; /* Change background color on hover */
        } /* End of styling for the button Container */
    </style> <!-- End of the styling -->
</head> <!-- End of the head -->
<body> <!-- Beginning of creating content for your HTML body -->

    <!-- Start of the creation of the navigation bar -->
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
    </nav> <!-- End of navigation bar -->

    <div class="dashboard-container"> <!-- Container for the dashboard content -->
        <div class="top-section"> <!-- Top section of the dashboard -->
            <img src="logo.jpg" alt="ENGEN Logo" class="logo"> <!-- Logo image -->
            <div class="title">BLENDING MONITOR</div> <!-- Title of the dashboard -->
        </div>
        <div class="button-container"> <!-- Creation of the add and view button -->
            <button onclick="addFunction()">ADD</button> <!-- Button to add data, triggers addFunction -->
            <button onclick="viewFunction()">VIEW</button> <!-- Button to view data, triggers viewFunction -->
        </div>
    </div>

    <script> /* Start of JavaScript program for interactivity */
        function logout() { // Function to enable the user to log out
            window.location.href = "logout.php"; // Redirect to logout page
        }

        function addFunction() { // Function to enable the user to add data
            window.location.href = "add.php"; // Redirect to add data page
        }

        function viewFunction() { // Function to enable the user to view data
            alert("View functionality here."); // Alert placeholder for view functionality
        }

        function goBack() { // Function to enable the user to go back to the previous page
            if (document.referrer) { // Check if there is a referrer
                window.history.back(); // Go back to the previous page in history
            } else {
                window.location.href = "dashboard.php"; // Redirect to dashboard if no history
            }
        }
    </script> <!-- End of JavaScript -->
</body> <!-- End of body tag -->
</html> <!-- End of HTML page -->
