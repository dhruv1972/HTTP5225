<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week3</title>
</head>
<body>
    <h1>PHP If Statements</h1>
    
    <h2>Basic If Statement</h2>
    <?php
    $hour = date('G');
    if($hour < 12) {
        $greeting = "Good morning!";
    } else {
        $greeting = "Good afternoon!";
    }
    echo "<p>$greeting</p>";
    ?>

    <h2>If-Elseif Statement</h2>
    <?php
    $hour = date('G');
    if($hour < 12) {
        $greeting = "Good morning!";
    } elseif($hour < 19) {
        $greeting = "Good afternoon!";
    } else {
        $greeting = "Good evening!";
    }
    echo "<p>$greeting</p>";
    ?>

    <h2>Switch Statement</h2>
    <?php
    $day = date('l'); // Gets current day of the week
    switch ($day) {
        case "Monday":
            echo "<p>Sounds like someone...</p>";
            break;
        case "Friday":
            echo "<p>TFIG!</p>";
            break;
        default:
            echo "<p>Have a great day!</p>";
            break;
    }
    ?>
</body>
</html>