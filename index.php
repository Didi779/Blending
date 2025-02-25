<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blending Monitor Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* White background for a clean look */
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 30vw;
            height: 90vh;
            background: white;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            position: relative;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for a soft effect */
        }

        .header {
            display: flex;
            align-items: center;
            position: absolute;
            top: 15px;
            left: 20px;
            z-index: 2;
        }

        .header img {
            width: 150px;
        }

        .header h2 {
            color: black;
            font-size: 22px;
            font-weight: bold;
            text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
            margin-left: 15px;
        }

        .form-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 90%;
            z-index: 2;
        }

        .form-group {
            width: 100%;
            margin-bottom: 35px;
            position: relative;
        }

        label {
            display: block;
            color: grey;
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group {
            display: flex;
            align-items: center;
            position: relative;
        }

        .input-group img {
            width: 20px;
            height: 20px;
            position: absolute;
            left: 0;
        }

        input {
            width: 100%;
            border: none;
            border-bottom: 2px solid grey;
            outline: none;
            font-size: 16px;
            padding: 5px 30px;
            background: none;
            color: black;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 20px;
            z-index: 2;
        }

        button {
            width: 80%;
            background: grey;
            color: white;
            border: none;
            padding: 14px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: black;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <img src="logo.jpg" alt="ENGEN Logo">
            <h2>BLENDING MONITOR</h2>
        </div>

        <div class="form-container">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label>USERNAME</label>
                    <div class="input-group">
                        <img src="OIP.jfif" alt="User Icon">
                        <input type="text" name="username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>PASSWORD</label>
                    <div class="input-group">
                        <img src="th.jfif" alt="Lock Icon">
                        <input type="password" name="password" required>
                    </div>
                </div>
        </div>

        <div class="button-container">
            <button type="submit">LOGIN</button>
        </div>
    </div>
</body>
</html>
