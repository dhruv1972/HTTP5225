<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quirky Zoo Management System</title>
</head>
<body>
    <h1>Welcome to the Quirky Zoo Management System!</h1>
    
    <?php
    // Get current hour in 24-hour format
    $currentHour = date('G');
    
    echo "<h2>Current Time: " . date('h:i A') . "</h2>";
    
    // Check feeding schedule
    if ($currentHour >= 5 && $currentHour < 9) {
        echo "<h3>Breakfast Time!</h3>";
        echo "<p>Animals should be fed: Bananas, Apples, and Oats</p>";
    } elseif ($currentHour >= 12 && $currentHour < 14) {
        echo "<h3>Lunch Time!</h3>";
        echo "<p>Animals should be fed: Fish, Chicken, and Vegetables</p>";
    } elseif ($currentHour >= 19 && $currentHour < 21) {
        echo "<h3>Dinner Time!</h3>";
        echo "<p>Animals should be fed: Steak, Carrots, and Broccoli</p>";
    } else {
        echo "<h3>No Feeding Time</h3>";
        echo "<p>The animals are not being fed at this time.</p>";
    }
    ?>
</body>
</html> 