<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array sort</title>
</head>
<body>
    <h1>Array Sort()</h1>
    <?php
    $animal = array("Tiger", "Fox", "Loin");
    sort($animal);
    $animals = count($animal);
        for($x = 0; $x < $animals; $x++) {
        echo $animal[$x];
        echo "<br>";
    }
    ?>
</body>
</html>