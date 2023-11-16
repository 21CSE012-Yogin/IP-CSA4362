<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Details</title>
    <style>
        /* Your styles go here */
        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <h1>Bus Details</h1>

    <form action="admindata.php" method="post">
        <label for="from">From:</label>
        <select name="from">
            <option value="cityA">City A</option>
            <option value="cityB">City B</option>
            <option value="cityC">City C</option>
            <option value="cityD">City D</option>
            <option value="cityE">City E</option>
        </select>

        <label for="to">To:</label>
        <select name="to">
            <option value="cityA">City A</option>
            <option value="cityB">City B</option>
            <option value="cityC">City C</option>
            <option value="cityD">City D</option>
            <option value="cityE">City E</option>
        </select>

        <label for="departureTime">Departure Time:</label>
        <input type="time" name="departureTime">

        <label for="vehicleNumber">Vehicle Number:</label>
        <input type="text" name="vehicleNumber">

        <button type="submit">Submit</button>

        <!-- Delete button for removing specific records -->
        <button type="button" class="delete-btn" onclick="deleteRecord()">Delete Record</button>
    </form>

    <script>
        // JavaScript function to delete a record
        function deleteRecord() {
            var recordToDelete = prompt("Enter the index of the record to delete:");

            if (recordToDelete !== null && recordToDelete !== "") {
                // Add a hidden input to the form to submit the record index to be deleted
                var deleteInput = document.createElement("input");
                deleteInput.type = "hidden";
                deleteInput.name = "deleteIndex";
                deleteInput.value = recordToDelete;
                
                // Append the input to the form
                document.querySelector("form").appendChild(deleteInput);

                // Submit the form
                document.querySelector("form").submit();
            }
        }
    </script>
</body>
</html>
