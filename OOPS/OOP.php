<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>
<body>
    <h1>OOP</h1>
            <?php 
            class modal{
                public $name;
                public $color;
                function set_name($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }
            }
            $cars = new modal();
            $cars->set_name("BMW ");
            echo $cars->get_name();
            $cars->set_name("CIVIC ");
            echo $cars->get_name();
            $cars->set_name("TOYOTA");
            echo $cars->get_name();
            ?>
      </body>
</html>