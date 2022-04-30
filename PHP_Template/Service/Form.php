<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
          background-color: red;
          position: relative;
          background-image: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
        }
        .d1{
            background: white;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d1 p-5">
        <h1 class="text-danger mt-5 mb-5">Forms:-</h1>
    <form action="">
    <P>Your Name:- <?php echo $_POST["name"] ?></P>
    <P>Your Subject:- <?php echo $_POST["email"] ?></P>
    <P>Message:- <?php echo $_POST["message"] ?></P>
    </form>
    </div>
    </div>
</body>
</html>