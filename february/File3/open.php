<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open read</title>
</head>
<body>
<h1>Open Read:-</h1>
    <?php
        $myfile = fopen("File.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("File.txt"));
        fclose($myfile);
    ?>
</body>
</html>