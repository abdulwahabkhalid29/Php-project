<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integer_Cast</title>
</head>
<body>
    <h1>integer_Cast</h1>
    <?php

        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
  
        echo "<br>";

        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;
    ?>
</body>
</html>