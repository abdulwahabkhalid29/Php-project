<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Destructor</title>
</head>
<body class="text-success container">
    <h1 class="mt-5 mb-3">DESTRUCTOR:-</h1>
    <?php
    class religion {
        var $fav;
        var $country;
        function __construct($fav, $country) {
            $this->fav = $fav;
            $this->country = $country; 
        }
        function __destruct() {
            echo " My Favorite  {$this -> fav} is {$this -> country}. "; 
        }
        }
        $country = new religion("Country", "Turkey");
    ?>
</body>
</html>