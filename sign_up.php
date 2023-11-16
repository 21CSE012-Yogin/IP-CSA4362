<?php
include_once('connect.php'); // Include your database connection file

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $dob = test_input($_POST["dob"]);
    $usertype = test_input($_POST["gender"]);
    $password = test_input($_POST["password"]);

    // Hash the password for better security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt =$conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Registration successful
        header("Location: index.php"); // Redirect to login page
        exit();
    } else {
        // Registration failed
        echo "Error: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor(); // Close the cursor to allow for the next query
    $conn = null; // Close the connection
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            background-color: lightgreen;
        
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Light grey background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #e0dcd9; /* Light nude color for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #916f6f; /* Dark nude color for labels */
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #b3aca7; /* Light grey border */
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #916f6f; /* Dark nude color for submit button */
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px;
            font-size: 18px;
            cursor: pointer;
        }
        
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Sign Up">
    </form>
</body>

</html>