<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Inheritance</title>
</head>
<body>
        <div class="container text-danger">
            <h1 class="mt-5 mb-3">INHERITANCE:-</h1>
            <?php
            class religion {
                public $fav;
                public $country;
                public function __construct($fav, $country) {
                $this->fav = $fav;
                $this->country = $country; 
               }
                public function intro() {
                echo "My Favorite  {$this -> fav} is {$this -> country}. "; 
               }
            }
            class country extends religion {
            public function message() {
             echo "Your Favorite Country? "; 
            }
            }
            $country = new country ("country", "Turkey");
            $country -> message();
            $country -> intro();
            ?>
        </div>
</body>
</html>