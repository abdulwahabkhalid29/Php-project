<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body class="bg-info">
    <div class=" mt-5 text-secondary container">
        <h1>Image Upload</h1>
        <img src="assets/img/2.PNG" width="200"><br><br>    
        <?php
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            if ($_FILES["fileToUpload"]["size"] > 200000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>

<div class="mt-5 container-fluid">
        <div class="container">
            
            <div class="card">
                <div class="card-header">
                    <h1>Form Save</h1>
                </div>
                <div class="card-body">
                    <p>First Name:- <?php echo $_POST["FirstName"] ?></p>
                    <p>Last Name:- <?php echo $_POST["Lname"] ?></p>
                    <p>E-mail Address:- <?php echo $_POST["E-mail"] ?></p>
                    <p>Phone Number:- <?php echo $_POST["Pnumber"] ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>