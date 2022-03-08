<!DOCTYPE html>
<html>
<body>
    <h1>Switch</h1>
<?php
$City = "Karachi";

switch ($City) {
  case "Karachi":
    echo "My favorite City is Karachi!";
    break;
  case "Lahore":
    echo "My favorite City is Lahore!";
    break;
  case "Quetta":
    echo "My favorite City is Quetta!";
    break;
  default:
    echo "My favorite City is  Karachi, Lahore,  Quetta!";
}
?>
 
</body>
</html>
