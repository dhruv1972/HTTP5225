<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'color');

        if(!$connect){
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = 'SELECT * FROM colors';
        $result = mysqli_query($connect, $query);
   if ($result && mysqli_num_rows($result) > 0) {
    $colors = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($colors as $color) {
        $name = $color['Name'];
        $hex = $color['Hex'];

        echo '<div style="background:' . $hex . '; padding:20px; color:white; margin-bottom:10px;">';
        echo $name;
        echo '</div>';
    }
} else {
    echo "No colors found.";
}

mysqli_close($connect);

    ?>
</body>
</html>