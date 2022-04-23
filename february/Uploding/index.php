<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplode</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body style="background: linear-gradient(to right, skyblue, purple );">
<div class=" container bg-light " style="border: rgb(24, 107, 19) 10px groove; margin: 100px;"> 
            <div class="p-5"> 
        <form action="Upload_img.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center text-success pb-4 display-5"><b><strong> Enter Form</strong></b></h1>
            <div class="row">
                <div class="col-md-6 mt-4">
            <input type="text" class="form-control" placeholder="Enter Your Name" required>
             </div>
            <div class="col-md-6 mt-4">
            <input type="text" class="form-control" placeholder="Enter your Last Name" required>
            </div>    
                <div class="col-md-6 mt-4">
            <input type="password" class="form-control" placeholder="Enter Your password" required>
             </div>
            <div class="col-md-6 mt-4">
            <input type="text" class="form-control" placeholder="Enter your phone number" required>
            </div>    
            </div>
            <div class="pt-3">
                <h4 for="country" class="text-success"><b> Country: </b></h4>
                <select class="form-control" id="sell">
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>Afghanistan</option>
                    <option>Indonesia</option>
                </select>
            </div>
                <h4 class="text-success mt-4"><b>Select Gender</b></h4>
                <input type="radio" id="male" name="Gender" class="text-success">
                <label for="male">male</label>
                <input type="radio" id="Female" name="Gender">
                <label for="Female">Female</label>
            <h4 class="pt-4 text-success"><b> Language</b></h4>
            <input type="checkbox">
            <label for="s">Punjabi</label>
            <input type="checkbox">
            <label for="s">Sindhi</label>
            <input type="checkbox">
            <label for="s">Phtan</label>
            <input type="checkbox">
            <label for="s">Balochi</label>
            <input type="checkbox">
            <label for="s">Sariky</label><br><br>
            <input class="btn btn-success p-2" type="file" name="fileToUpload" id="fileToUpload">
            <input class="btn btn-outline-success p-2" type="submit" value="Upload Image" name="submit">
        </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>