<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management System</title>
    <style>
        body {
            font-family: 'Bree Serif', serif;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('images/Background.jpg'); /* Replace 'bus_background.jpg' with your actual background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        header {
            background-color: #333;
            padding: 7px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 7px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 7px;
            margin: 0 10px;
        }

        .schedule {
            border-collapse: collapse;
            width: 100%;
        }

        .schedule th, .schedule td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .schedule th {
            background-color: #222;
            color: #fff;
        }

        footer {
            background-color: #333;
            padding: 7px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bus Pass Management System</h1>
    </header>

    <nav>
        <a href="admindata.php">Home</a>
        <a href="manage_conductor.php">Conductor Data</a>
        <a href="#">Bus Pass Request</a>
        <a href="bus_details.php">Add Bus Details</a>
        <a href="admin.php">Logout</a>
    </nav>

    <section>
        <?php
        // Start or resume the session
        session_start();

        // Check if form data is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $from = $_POST["from"];
            $to = $_POST["to"];
            $departureTime = $_POST["departureTime"];
            $vehicleNumber = $_POST["vehicleNumber"];

            // Store the data in the session
            $_SESSION['busDetails'][] = array(
                'from' => $from,
                'to' => $to,
                'departureTime' => $departureTime,
                'vehicleNumber' => $vehicleNumber
            );
        }

        // Check if delete button is clicked
        if (isset($_POST['deleteIndex'])) {
            $deleteIndex = $_POST['deleteIndex'];

            // Remove the selected record from the session
            unset($_SESSION['busDetails'][$deleteIndex]);
        }

        // Display the submitted data in a schedule-like format
        echo "<h2>Schedule</h2>";
        echo "<table class='schedule'>";
        echo "<tr><th>From</th><th>To</th><th>Departure Time</th><th>Vehicle Number</th><th>Action</th></tr>";

        // Display stored records
        if (isset($_SESSION['busDetails'])) {
            foreach ($_SESSION['busDetails'] as $index => $record) {
                echo "<tr>";
                echo "<td>{$record['from']}</td>";
                echo "<td>{$record['to']}</td>";
                echo "<td>{$record['departureTime']}</td>";
                echo "<td>{$record['vehicleNumber']}</td>";
                echo "<td><form method='post'><input type='hidden' name='deleteIndex' value='$index'><button class='delete-btn' type='submit'>Delete</button></form></td>";
                echo "</tr>";
            }
        }

        echo "</table>";
        ?>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Bus Pass Management System. All rights reserved.</p>
    </footer>
</body>
</html>
