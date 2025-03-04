<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blending Monitor Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
/* This is the beginning of the body of the page*/
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Navigation Bar */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: white;
            border-bottom: 2px solid grey;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .nav-links {
            display: flex;
            gap: 50px;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: grey;
        }

        .logout {
            display: flex;
            align-items: center;
            color: black;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout img {
            width: 20px;
            margin-right: 5px;
        }

        /*Styling for the dashboard Container */
        .dashboard-container {
            width: 60vw;
            height: 60vh;
            background: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            margin-top: 80px;
            border-radius: 8px;  /*End of styling for the dashboard Container */
        }

        .top-section {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 10px 20px;
        }

        .logo {
            width: 150px;
            height: auto;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            color: black;
            border-top: 2px solid grey;
            border-bottom: 2px solid grey;
            padding: 10px 0;
            flex-grow: 1;
            text-align: center;
        }


         /*Styling for the button Container */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .button-container button {
            width: 120px;
            height: 50px;
            background: grey;
            border: none;
            font-size: 18px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 5px;
        }

        .button-container button:hover {
            background: black;   /*End of styling for the button Container */
        }
    </style> <!--End of the styling-->
</head>   <!--End of the head-->
<body>  <!--Beginning of creating content for your html body-->

    <!--Start of the creation of the navigation bar-->
    <nav>
        <div class="nav-links">
            <a href="dashboard.php">Home</a>
            <a href="reports.php">Reports</a>
            <a href="#" onclick="goBack()">Back</a>
        </div>
        <div class="logout" onclick="logout()">
            <img src="OIP.jfif" alt="User Icon">
            <span>LOGOUT</span>
        </div>
    </nav>  <!--End of navigation bar-->

    <div class="dashboard-container">
        <div class="top-section">
            <img src="logo.jpg" alt="ENGEN Logo" class="logo">
            <div class="title">BLENDING MONITOR</div>
        </div>
        <div class="button-container">   <!--Creation of the add and view button-->
            <button onclick="addFunction()">ADD</button>
            <button onclick="viewFunction()">VIEW</button>
        </div>
    </div>

    <script>  /*Start of javascript program for responsiveness*/
        function logout() {  //A self created function to enable the user to logout.
            window.location.href = "logout.php";
        }

        function addFunction() {  //A self created function to enable the user to be able to add data to the database.
            window.location.href = "add.php";
        }

        function viewFunction() {//A self created function to enable the user to be able to view the page that has the stored tables.
            alert("View functionality here.");
        }

        function goBack() {  //A self created function to enable the user to be able to go back to the previously clicked page.
            if (document.referrer) {
                window.history.back(); 
            } else {
                window.location.href = "dashboard.php"; // Redirect to dashboard if no history
            }
        }
    </script>  <!--End of javascript-->
</body>  <!--End of body tag-->
</html> <!--End of html page-->
