<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Constructor</title>
</head>
<body>
    <div class="container text-primary">
        <h1 class="mt-5 mb-3">CONSTRUCTOR:-</h1>
        <?php
        class religion {
            public $fav;
            public $country;
            function __construct($fav, $country) {
                $this->fav = $fav; 
                $this->country = $country; 
            }
            function get_fav() {
                return $this->fav;
            }
            function get_country() {
                return $this->country;
            }
        }
        $country = new religion("Country", "Turkey");
        echo $country->get_fav();
        echo "<br>";
        echo $country->get_country();
        ?>
    </div>
</body>
</html>