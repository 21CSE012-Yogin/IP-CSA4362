<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Zone</title>

    <style>
        *{
          background-color: black;
        }

        body {
            font-family: sans-serif;
        }

        .container {
            width: 500px;
            margin-left: 30%;
            margin-top: 15%;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .login-form {
        width: 335px;
        margin: 0 auto;
        padding: 29px;
        border: 2px solid black;
        }

      .login-form input {
        color: whitesmoke;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        }

        .login-form button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="color: whitesmoke;">Admin Zone</h1>

        <div class="login-form">
            <input type="text" id="username" name="username" required placeholder="username">
            <input type="password" id="password" name="password" required placeholder="password">
            
            <button type="button" onclick="location.href='admindata.php'">Sign-in</button>
            
        </div>
    </div>
</body>
</html>

