<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>function</h1>
<?php
        function familyName($fname, $year) {
            echo "$fname Born in $year"."<br>";
        }

    familyName("Awahab","2004");
    familyName("Fahad","2005");
    familyName("Zeeshan","2011");
?>
</body>
</html>