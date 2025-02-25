<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "blending_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blends
$sql = "SELECT id, order_no, base_tank, product, flushed FROM blending_data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            gap: 40px;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 16px;
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

        /* 🔹 Table Styling */
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin: 20px 0;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background: #333;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-data {
            color: grey;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- 🔹 Navigation Bar -->
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
    </nav>

    <div class="title">Blending Reports</div>

    <table>
        <tr>
            <th>ID</th>
            <th>Order No</th>
            <th>Base Tank</th>
            <th>Product</th>
            <th>Flushed</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['order_no']}</td>
                        <td>{$row['base_tank']}</td>
                        <td>{$row['product']}</td>
                        <td>{$row['flushed']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='no-data'>No blends recorded</td></tr>";
        }
        ?>
    </table>

    <script>
        function logout() {
            window.location.href = "logout.php";
        }

        function goBack() {
            if (document.referrer) {
                window.history.back();
            } else {
                window.location.href = "dashboard.php";
            }
        }
    </script>

</body>
</html>

<?php
$conn->close();
?>
