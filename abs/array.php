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
    echo "<h1>Multidimensional Array</h1>";
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
        
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
      echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
      echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
      echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
      echo "<h1>Multidimensional Array</h1>";
      $car = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
          
      for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$car[$row][$col]."</li>";
        }
        echo "</ul>";
      }
    ?>
</body>
</html>