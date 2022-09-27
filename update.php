
<?php

require("connect.php");
if (isset($_POST["name"])) {    
    $nom = $_POST["name"]; 
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];   
    $password = $_POST["password"];

    $result = mysqli_query($con,"UPDATE user SET name ='$nom',email='$email',mobile='$mobile', password='$password' WHERE id='$_GET[id]'");
if ($result) {
    header("location:display.php");
    exit(0);
}
    
}

// header("location :display.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="your name" name="name"autocomplete="">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="text" class="form-control" placeholder="your email" name="email"autocomplete="">
                </div>
                <div class="form-group">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" placeholder="your name" name="mobile"autocomplete="">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" placeholder="your name" name="password"autocomplete="">
                </div>
                <div class="form-group">
                    <label for="">vuellez cliquez le bouton</label><br>
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>