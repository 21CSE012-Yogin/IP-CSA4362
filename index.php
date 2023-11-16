<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
</head>
<style>
    body {
        background-color: black;
        
        margin: 0; /* Remove default margin */
        font-family: 'Arial', sans-serif; /* Use a common sans-serif font */
    }

    h1 {
        text-align: center; /* Align the h1 tag to the center */
        font-size: 50px; /* Make the font size bigger */
        font-family: 'Arial', sans-serif; /* Change 'Your New Font' to the desired font name */
        color: #916f6f; /* Dark nude color for the h1 tag */
    }
    h2 {
        text-align: center; /* Align the h1 tag to the center */
        font-size: 36px; /* Make the font size bigger */
        font-family: 'Arial', sans-serif; /* Change 'Your New Font' to the desired font name */
        color: grey; /* Dark nude color for the h1 tag */
    }

    .login-box {
        background-color: #e0dcd9; /* Light nude color for the login box */
        width: 300px;
        margin: auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        text-align: center;
    }

    .login-box h1 {
        color: black; /* Dark nude color for the login header */
        font-size: 24px;
        margin-bottom: 20px;
    }

    .textbox {
        position: relative;
        margin-bottom: 20px;
    }

    .textbox i {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #916f6f; /* Dark nude color for the icon */
    }

    .textbox input {
        width: calc(100% - 30px);
        padding: 10px;
        border: none;
        border-bottom: 1px solid #b3aca7; /* Light grey border for the input */
        outline: none;
        font-size: 16px;
    }

    .button {
        width: 100%;
        padding: 15px;
        color: #fff; /* White text color for the button */
        background-color: black; /* Dark nude color for the button */
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    .textbox button {
        background: none;
        border: none;
        color: black; /* Dark nude color for the button text */
        cursor: pointer;
        font-size: 16px;
        text-decoration: underline;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
        color: blanchedalmond; /* Dark nude color for the signup link */
    }

    .signup-link a {
        color: whitesmoke; /* Dark nude color for the signup link */
        text-decoration: underline;
    }
</style>

<body>
    <h2>USER LOGIN</h2>
    <form action="valid.php" method="post">
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <button type="button" onclick="location.href='user.php'">Submit</button>
            <div class="textbox">
              <button type="button" onclick="location.href='admin.php'">Admin Login</button>
              <button type="button" onclick="location.href='conductor.php'">Conductor Login</button>

            </div>

            
        </div>
    </form>

    <div class="signup-link">
        <p>Don't have an account? <a href="sign_up.php">Sign Up</a></p>
    </div>
</body>

</html>