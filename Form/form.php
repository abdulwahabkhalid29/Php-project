<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP From</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body style="background:skyblue;">
    <div class=" p-5 container-fluid">
        <div class="container">
            <div class="card" style="border:10px groove red; background:wheat;">
                <div class="card-body">
                    <h3 class="card-title text-center text-danger">PHP FORM</h3>
                    <p class="card-text"></p>
                    <form action="FormS.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                Name: <input type="text" class="form-control" name="Name" required>
                            </div>
                            <div class="col-md-6">
                               Father Name: <input type="text" class="form-control" name="Sur_Name" required>
                            </div>
                            <div class="col-md-6">
                                Mobile Number: <input type="text" class="form-control" name="Phone_Number" required>
                            </div>
                            <div class="col-md-6">
                                local Address: <input type="text" class="form-control" name="Address_Line_1" required>
                            </div>
                            <div class="col-md-6">
                               Orignal Address: <input type="text" class="form-control" name="Address_Line_2" required>
                            </div>
                            <div class="col-md-6">
                                Post_Code: <input type="text" class="form-control" name="Post_Code" required>
                            </div>
                            <div class="col-md-6">
                                State: <input type="text" class="form-control" name="State" required>
                            </div>
                            <div class="col-md-6">
                                Area: <input type="text" class="form-control" name="Area" required>
                            </div>
                            <div class="col-md-6">
                                Email ID: <input type="text" class="form-control" name="Email_ID" required>
                            </div>
                            <div class="col-md-6">
                                Education: <input type="text" class="form-control" name="Education" required>
                            </div>
                            <div class="col-md-6">
                                Country: <select name="Country" id="select" class="form-control" required>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="India">India</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Currency: <select name="Currency" id="select" class="form-control" required>
                                    <option value="Rupees">Rupees</option>
                                    <option value="Dollar">Dollar</option>
                                    <option value="Usd">Usd</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="form-control bg-info text-light mt-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>