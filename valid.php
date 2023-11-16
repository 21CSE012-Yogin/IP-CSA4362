<?php

include_once('connect.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $use = $stmt->fetchAll();

    $credentials_matched = false;

    foreach ($use as $user) {
        if (($user['username'] == $username) &&
            ($user['password'] == $password)) {
            // Redirect if credentials match
            header("location: user.php");
            exit(); // Make sure to exit after redirection
        }
    }

    // If none of the users match, show the "WRONG INFORMATION" alert
    echo "<script language='javascript'>";
    echo "alert('WRONG INFORMATION')";
    echo "</script>";
    die();
}

?>