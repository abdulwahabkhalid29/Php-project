<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <style>
        .error {color:blue;}
    </style>
</head>
<body style="background:lightgray;">
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "country is required";
  } else {
    $country = test_input($_POST["country"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container mt-5" style="border:blue 10px groove;">
<h2 class="text-center text-success">PHP Form Validation Example</h2>
<p><span class="error">*Required Field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="row">
    <div class="col-md-6">
    Name: <input type="text" name="name" class="form-control">
    <span class="error">* <?php echo $nameErr;?></span>
    </div>
   
    <div class="col-md-6">
  E-mail: <input type="text" name="email" class="form-control">
  <span class="error">* <?php echo $emailErr;?></span>
</div>
  <br><br>
  <div class="col-md-6 mt-3">
  Website: <input type="text" name="website" class="form-control">
  <span class="error"><?php echo $websiteErr;?></span>
</div>
<div class="col-md-6 mt-3">
  Comment: <textarea name="comment" rows="1" cols="40" class="form-control"s></textarea>
</div>
  <div class="col-md-12 mt-5">
    country: <select name="country" id="select" class="form-control" >
    <option value="Pakistan">Pakistan</option>
    <option value="India">India</option>
    <option value="China">China</option>
    <span class="error"><?php echo $countryErr;?></span>
    </select>

    </div>
    <center>
<div class="col-md-7">
  <input type="submit" name="submit" value="Submit" class="mt-5 p-2 bg-info text-danger form-control">  
</div>
</div>
</center>
</form>
<div class="text-danger">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $country;
?>
</div>
</div>
</body>
</html>