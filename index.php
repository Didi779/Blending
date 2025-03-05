<!DOCTYPE html> <!-- Declare the document type as HTML5 -->
<html lang="en"> <!-- Set the language of the document to English -->
<head> <!-- Start of the head section -->
    <meta charset="UTF-8"> <!-- Set the character encoding for the document to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set the viewport for responsive design -->
    <title>Blending Monitor Login</title> <!-- Title of the page that appears in the browser tab -->
    <style> <!-- Start of CSS for styling -->
        * {
            margin: 0; /* Remove default margin for all elements */
            padding: 0; /* Remove default padding for all elements */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            font-family: 'Arial', sans-serif; /* Set the default font for the document */
        }

        /* White background for a clean look */
        body {
            background-color: white; /* Set the background color of the body */
            display: flex; /* Use flexbox layout */
            justify-content: center; /* Center children horizontally */
            align-items: center; /* Center children vertically */
            height: 100vh; /* Set the height to 100% of the viewport height */
        }

        .login-container {
            width: 30vw; /* Set width to 30% of the viewport width */
            height: 90vh; /* Set height to 90% of the viewport height */
            background: white; /* Set background color to white */
            padding: 10px; /* Add padding inside the container */
            border-radius: 10px; /* Round the corners of the container */
            display: flex; /* Use flexbox layout */
            flex-direction: column; /* Arrange children in a column */
            position: relative; /* Set position to relative for absolute positioning of children */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for a soft effect */
        }

        .header {
            display: flex; /* Use flexbox layout for the header */
            align-items: center; /* Center items vertically */
            position: absolute; /* Position header absolutely within the container */
            top: 15px; /* Position header 15px from the top */
            left: 20px; /* Position header 20px from the left */
            z-index: 2; /* Ensure header is above other elements */
        }

        .header img {
            width: 150px; /* Set width for the logo image */
        }

        .header h2 {
            color: black; /* Set header text color to black */
            font-size: 22px; /* Set font size for header text */
            font-weight: bold; /* Make header text bold */
            text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2); /* Add shadow effect to text */
            margin-left: 15px; /* Add space to the left of the header text */
        }

        .form-container {
            flex-grow: 1; /* Allow form container to grow and take available space */
            display: flex; /* Use flexbox layout */
            flex-direction: column; /* Arrange children in a column */
            justify-content: center; /* Center children vertically */
            align-items: center; /* Center children horizontally */
            width: 90%; /* Set width to 90% of the container */
            z-index: 2; /* Ensure form container is above other elements */
        }

        .form-group {
            width: 100%; /* Set width to 100% of the container */
            margin-bottom: 35px; /* Add space below each form group */
            position: relative; /* Set position to relative for absolute positioning of children */
        }

        label {
            display: block; /* Make label a block element */
            color: grey; /* Set label text color to grey */
            font-size: 14px; /* Set font size for label */
            margin-bottom: 5px; /* Add space below the label */
            font-weight: bold; /* Make label text bold */
        }

        .input-group {
            display: flex; /* Use flexbox layout for input group */
            align-items: center; /* Center items vertically */
            position: relative; /* Set position to relative for absolute positioning of children */
        }

        .input-group img {
            width: 20px; /* Set width for the icon image */
            height: 20px; /* Set height for the icon image */
            position: absolute; /* Position icon absolutely within the input group */
            left: 0; /* Position icon at the left */
        }

        input {
            width: 100%; /* Set width to 100% of the input group */
            border: none; /* Remove border */
            border-bottom: 2px solid grey; /* Add bottom border */
            outline: none; /* Remove outline */
            font-size: 16px; /* Set font size for input */
            padding: 5px 30px; /* Add padding inside the input */
            background: none; /* Set background to none */
            color: black; /* Set text color to black */
        }

        .button-container {
            display: flex; /* Use flexbox layout for button container */
            justify-content: center; /* Center buttons horizontally */
            align-items: center; /* Center buttons vertically */
            padding-bottom: 20px; /* Add space below the button container */
            z-index: 2; /* Ensure button container is above other elements */
        }

        button {
            width: 80%; /* Set width for the button */
            background: grey; /* Set background color for the button */
            color: white; /* Set text color to white */
            border: none; /* Remove border */
            padding: 14px; /* Add padding inside the button */
            font-size: 16px; /* Set font size for button text */
            cursor: pointer; /* Change cursor to pointer on hover */
            border-radius: 5px; /* Round the corners of the button */
            transition: 0.3s; /* Add transition effect for hover */
        }

        button:hover {
            background: black; /* Change background color on hover */
        }
    </style> <!-- End of CSS -->
</head>
<body> <!-- Start of the body section -->
    <div class="login-container"> <!-- Container for the login form -->
        <div class="header"> <!-- Header section containing logo and title -->
            <img src="logo.jpg" alt="ENGEN Logo"> <!-- Logo image -->
            <h2>BLENDING MONITOR</h2> <!-- Title of the application -->
        </div>

        <div class="form-container"> <!-- Container for the form elements -->
            <form action="login.php" method="post"> <!-- Form that submits data to login.php using POST method -->
                <div class="form-group"> <!-- Container for the username input -->
                    <label>USERNAME</label> <!-- Label for the username input -->
                    <div class="input-group"> <!-- Container for the input and icon -->
                        <img src="OIP.jfif" alt="User  Icon"> <!-- User icon image -->
                        <input type="text" name="username" required> <!-- Input field for username, required -->
                    </div>
                </div>

                <div class="form-group"> <!-- Container for the password input -->
                    <label>PASSWORD</label> <!-- Label for the password input -->
                    <div class="input-group"> <!-- Container for the input and icon -->
                        <img src="th.jfif" alt="Lock Icon"> <!-- Lock icon image -->
                        <input type="password" name="password" required> <!-- Input field for password, required -->
                    </div>
                </div>
            </form> <!-- End of form -->
        </div>

        <div class="button-container"> <!-- Container for the login button -->
            <button type="submit">LOGIN</button> <!-- Submit button for the form -->
        </div>
    </div>
</body>
</html>
