<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-info text-center">
    <div class="container">
        <h1 class="text-danger mt-5 mb-5">Forms:-</h1>
    <form action="">
    <P>Your Name:- <?php echo $_POST["MyName"] ?></P>
    <P>Your Subject:- <?php echo $_POST["MySubject"] ?></P>
    <P>Message:- <?php echo $_POST["address"] ?></P>
    </form>
    </div>
</body>
</html>