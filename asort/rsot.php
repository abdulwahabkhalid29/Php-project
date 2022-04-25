<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rsort</title>
</head>
<body>
    <h1>rsort Array</h1>
    <?php

    $fruit = array("Volvo", "BMW", "Toyota");
    rsort($fruit);
    $cars = count($fruit);
    for($y = 0; $y < $cars; $y++) {
      echo $fruit[$y];
      echo "<br>";
    }
    ?>
</body>
</html>