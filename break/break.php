<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break</title>
</head>
<body>
    <h1>"BREAK / CONTINUE"</h1>
 <?php
    for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is:".$x."<br>";
}
 ?>
</body>
</html>