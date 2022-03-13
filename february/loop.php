<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body style="background:lightgray;">
    <h1>'WHILE LOOP'</h1>
<?php
    $M= "A";
    while($M <= "F"){
        echo "The Alphabet is: $M <br>";
        $M++;
        }
        echo "<h1>'DO WHILE LOOP'</h1>";
        $W= "B";
        do{
            echo "The Alphabet is: $W <br>";
            $W++;
        }  while ($W <= "B");
        echo "<h1>'FOR LOOP'</h1>";
        for ($L = "A"; $L <= "I"; $L++){
            echo "The Alphabet is: $L <br>";
        }
        echo "<h1>'FOR EACH LOOP'</h1>";
        $age = array("ABDUL WAHAB"=>"17", "M.FAHAD"=>"16",  "M.ZEESHAN"=>"11");
        foreach($age as $H => $val){
            echo "$H = $val<br>";
        }
    ?>  
    
</body>
</html>