<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitness time</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>
    <div class="container-fluid " style="background: rgb(116, 116, 116);">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark ">
                <img src="assets/img/logo-w.png" alt="w" class="mr-5">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarsExample03">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link ml-1 text-light" href="Home.php">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="About.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="Member_Ship.php">Member Ship</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="Team.php">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="Contact.php" >Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                      <a class="dropdown-item" href="#">Link 1</a>
                      <a class="dropdown-item" href="#">Link 2</a>
                      <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                  </li>

                  </ul>
                </div>
              </nav>
        </div>
    </div>
  <div class="Home">
      <?php
      echo include "Home.php";
      ?>
  </div>
  <div class="About">
      <?php
      echo include "About.php";
      ?>
  </div>
  <div class="Member_Ship">
      <?php
      echo include "Member_Ship.php";
      ?>
  </div>
  <div class="Team">
      <?php
      echo include "Team.php";
      ?>
  </div>
  <div class="Contact">
      <?php
      echo include "Contact.php";
      ?>
  </div>




    <div class="container-fluid  text-light text-center pt-5" style="height: 180px; background:rgb(74, 74, 74) ;">
      <p>Sample text. Click to select the text box. Click again or double <br> click to start editing the text.</p>
      <p class="mt-5"><a href="#"> Template</a> created with <a href="#">Nicepage</a>.</p>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>