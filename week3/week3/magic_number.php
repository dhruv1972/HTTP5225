<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Number Game</title>
</head>
<body>
    <h1>Magic Number Game</h1>
    
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Find Magic Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $magicNumber = "";

        echo "<h2>Result for number: $number</h2>";
        
        if ($number % 3 == 0 && $number % 5 == 0) {
            $magicNumber = "FizzBuzz";
        } elseif ($number % 3 == 0) {
            $magicNumber = "Fizz";
        } elseif ($number % 5 == 0) {
            $magicNumber = "Buzz";
        } else {
            $magicNumber = $number;
        }

        echo "<p>The magic number is: $magicNumber</p>";
    }
    ?>
</body>
</html> 