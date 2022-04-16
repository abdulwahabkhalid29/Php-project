<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readfile</title>
</head>
<body>
    <h1>Read File</h1>
    <?php
       $myfile = fopen("File.txt", "a") or die("Unable to open file!");
       $txt = "Qasim Inayat\n";
       fwrite($myfile, $txt);
       $txt = "Abdul wahab Khalid\n";
       fwrite($myfile, $txt);
       $txt = "Zeeshan Khalid\n";
       fwrite($myfile, $txt);
       $txt = "Fahad Khalid\n";
       fwrite($myfile, $txt);
       fclose($myfile);
    ?>
</body>
</html>