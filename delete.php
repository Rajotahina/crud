<?php
$con =new mysqli('localhost','root','','crud');
//$sql= "DELETE  FROM users WHERE id = $_GET['id']";
if (isset($_GET["id"])) {
    $usersid = $_GET["id"];
    mysqli_query($con ,"DELETE  FROM user WHERE id = $usersid");
    header("location:display.php");
    exit(0);
}

?>