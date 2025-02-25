 <!-- Beginning of php script-->
<?php
session_start(); //Function created to store user information
if (!isset($_SESSION['username'])) { // Decision structure to tell the browser that if user fails to log in, user must be redirected to index page. 
    header("Location: index.php");
    exit();
}
?>
<!--End of php script-->


<!DOCTYPE html>         <!--The start of every html program must be declared with this tag, to tell the browser the type of document its dealing with.-->
<html lang="en">       <!--The type of language that the page will be written in-->
<head>                <!--This tag is used to declare elements that will be on your header.-->
    <meta charset="UTF-8">     <!--This is to tell the browser the type of character encoding used.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!--This tag tells the browser how the content should be displayed.-->
    <title>Add Blending Data</title>   <!--This title is what will appear when you open this tab.-->

    
    <style> /*This is the beginning of css, css is used for styling.*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
            /*This is the styling for the body of the page*/
        body {
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding-top: 80px;
        } /*End of body styling*/
     

        /* Styling for the navigation Bar */
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
      /*End of navigation styling*/

     /*Styling for the logout element*/
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

          /*End of logout styling*/
     

        /* This styling will apply to the form Container */
        .form-container {
            width: 50vw;
            padding: 30px;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 { 
            text-align: center;
            color: black;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-weight: bold;
            color: black;
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 2px solid grey;
            border-radius: 5px;
            font-size: 16px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            width: 48%;
            padding: 12px;
            border: none;
            background: grey;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 5px;
        }

        button:hover {
            background: black;
        }
    </style>   <!-- End of css-->
    
</head> <!--End of the head tag.-->


<!--Now that the head part of the page is done, we move to the body part of the page.-->
<body>

    <!--  Navigation Bar -->
    <nav>
        <div class="nav-links">  <!--The div tag is used to separate or divide the elements-->
            <a href="dashboard.php">Home</a>  <!--These are elements or options found on the nav bar-->
            <a href="reports.php">Reports</a>
            <a href="#" onclick="goBack()">Back</a>
        </div>

        <div class="logout" onclick="logout()">
            <img src="OIP.jfif" alt="User Icon">
            <span>LOGOUT</span>
        </div>
    </nav>

 <!--End of navigation bar-->

    <!--Form Container -->
    <div class="form-container">  <!--Here we are creating a form that will be accepting input from the user and storing it on a database-->
        <h2>Add Blending Data</h2>
        <form action="data_add.php" method="POST">  <!--The post method is used to retrieve data from the user-->
            <label for="order_no">Order No:</label>  <!--The label tag is used to correctly label each and every field-->
            <input type="text" id="order_no" name="order_no" required>

            <label for="base_tank">Base Tank:</label>
            <input type="text" id="base_tank" name="base_tank" required>

            <label for="product">Product:</label>
            <input type="text" id="product" name="product" required>

            <label for="flushed">Flushed:</label>
            <select id="flushed" name="flushed">
                <option value="Yes">Yes</option>  <!--This one will create a dropdown where a user can be able to choose 2 provided options-->
                <option value="No">No</option>
            </select>

         <!--Here now we are creating a submit button -->
            <div class="button-container">
                <button type="submit">Submit</button>
                <button type="button" onclick="goBack()">Cancel</button>
            </div>
        </form>  <!--End of form-->
    </div>

    <script> /*This is a javascript tag that will be used for responsiveness purposes*/
        function goBack() {  /*This is a function that is created for when a user clicks on the back tab they are able to go back to the previous page*/
            window.location.href = "dashboard.php";
        }

        function logout() {  /*Function created to permit the user to be able to logout*/
            window.location.href = "logout.php";  /*It is referencing a different page that has been specifically created to permit a user to logout*/
        }
    </script>  <!--End of javascript-->

</body> <!--End of the body-->
</html>  <!--End of the html page-->
