<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database</title>
</head>
<body>
    <h2>Add Student</h2>

    <!-- Form to take user input -->
    <form method="post" action="">
        <label for="rollNumber">Roll Number:</label>
        <input type="text" id="rollNumber" name="rollNumber" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="pinCode">Pin Code:</label>
        <input type="text" id="pinCode" name="pinCode" required>

        <button type="submit" name="addRecord">Add Record</button>
    </form>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "run";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if (isset($_POST['addRecord'])) {
        // Get user input from the form
        $rollNumber = $_POST['rollNumber'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pinCode = $_POST['pinCode'];

        // Insert record into the database
        $sql = "INSERT INTO studant (rollNumber, name, city, pinCode) VALUES ('$rollNumber', '$name', '$city', '$pinCode')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Record added successfully!</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
