<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Root Calculator</title>
</head>
<body>
    <h2>Square Root Calculator</h2>

    <!-- Form to take user input -->
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Calculate Square Root</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the number from the form
        $number = $_POST['number'];

        // Check if the number is non-negative
        if ($number >= 0) {
            // Compute the square root
            $squareRoot = sqrt($number);

            // Display the result
            echo "<p>The square root of $number is: $squareRoot</p>";
        } else {
            // Display an error message for negative numbers
            echo "<p>Please enter a non-negative number.</p>";
        }
    }
    ?>
</body>
</html>
