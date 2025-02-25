<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blending Data</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding-top: 80px;
        }

        /* 🔹 Navigation Bar */
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

        /* 🔹 Form Container */
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
    </style>
</head>
<body>

    <!-- 🔹 Navigation Bar -->
    <nav>
        <div class="nav-links">
            <a href="dashboard.php">Home</a>
            <a href="#">Reports</a>
            <a href="dashboard.php">Back</a>
        </div>

        <div class="logout" onclick="logout()">
            <img src="OIP.jfif" alt="User Icon">
            <span>LOGOUT</span>
        </div>
    </nav>

    <!-- 🔹 Form Container -->
    <div class="form-container">
        <h2>Add Blending Data</h2>
        <form action="data_add.php" method="POST">
            <label for="order_no">Order No:</label>
            <input type="text" id="order_no" name="order_no" required>

            <label for="base_tank">Base Tank:</label>
            <input type="text" id="base_tank" name="base_tank" required>

            <label for="product">Product:</label>
            <input type="text" id="product" name="product" required>

            <label for="flushed">Flushed:</label>
            <select id="flushed" name="flushed">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <div class="button-container">
                <button type="submit">Submit</button>
                <button type="button" onclick="goBack()">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function goBack() {
            window.location.href = "dashboard.php";
        }

        function logout() {
            window.location.href = "logout.php";
        }
    </script>

</body>
</html>
