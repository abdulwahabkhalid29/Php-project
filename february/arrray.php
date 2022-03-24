<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php array</title>
</head>
<body>
    <h1>PHP Array</h1>
    <?php
    $animal = array("Loin" , "Tiger" , "Fox" , "Cat");
    echo "My Favorite animal is " . $animal[0] . " , " . $animal[1] . " , " . $animal[2] . " , " . $animal[3] . ".";
    echo "<h1>Arrray count</h1>";
    echo count($animal);
    echo"<h1>Array Length</h1>";
    $arraylength = count($animal);
    for($x = 0; $x < $arraylength; $x++) {
        echo $animal[$x];
        echo "<br>";
    } 
    echo "<h1>Associative Array</h1>";
    $name = array("Awahab"=>"17" , "M.fahad"=>"16" , "Zeeshan"=>"11");
    foreach($name as $x=> $x_value){
        echo "" . $x . ", age " . $x_value . "<br>";
    }
    echo "<h1>name Array</h1>";
    echo "Awahab " . $name['Awahab'] . " age. ";
    ?>
</body>
</html>