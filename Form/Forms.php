<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body style="background:skyblue;">
    <div class=" p-5 container-fluid text-light">
        <div class="container">
            <div class="card" style="border:red 10px groove; background:lightgray;">
                <div class="card-body">
                    <h3 class="card-title text-center text-danger">PHP FORM</h3>
                    <p class="card-text"></p>
                    <div class="row">
                        <div class=" col-md-6">
                            <p>Name: <?php echo $_POST["Name"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>Father Name: <?php echo $_POST["Sur_Name"]; ?></p>
                        </div>
                        <div class="  col-md-6">
                            <p>Phone Number: <?php echo $_POST["Phone_Number"]; ?></p>
                        </div>
                        <div class="col-md-6   ">
                            <p>Local Address: <?php echo $_POST["Address_Line_1"]; ?></p>
                        </div>
                        <div class="col-md-6   ">
                            <p>Orignal Address: <?php echo $_POST["Address_Line_2"]; ?></p>
                        </div>
                        <div class="col-md-6  ">
                            <p>Post Code <?php echo $_POST["Post_Code"]; ?></p>
                        </div>
                        <div class="  col-md-6">
                            <p>State: <?php echo $_POST["State"]; ?></p>
                        </div>
                        <div class="mt-3 col-md-6">
                            <p>Area: <?php echo $_POST["Area"]; ?></p>
                        </div>
                        <div class="  col-md-6">
                            <p>Email ID: <?php echo $_POST["Email_ID"]; ?></p>
                        </div>
                        <div class="   col-md-6">
                            <p>Education: <?php echo $_POST["Education"]; ?></p>
                        </div>
                        <div class="col-md-6   ">
                            <p>Country: <?php echo $_POST["Country"]; ?></p>
                        </div>
                        <div class="col-md-6  ">
                            <p>Currency: <?php echo $_POST["Currency"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>