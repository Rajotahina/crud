<?php
$con =new mysqli('localhost','root','','crud');
 $sql=mysqli_query($con , "SELECT * FROM  user");
 $recup = mysqli_fetch_all($sql ,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@materializecss/materialize@1.1.0/dist/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <button class="btn btn-primary my-5" type=""><a href="user.php" class="text-light"> <i class="material-icons">add user</i></a></button>
        </div>

        <!-- TABLEAU  -->

        <table class="table table-striped">
            <thead>
                <tr>
                <th class="col">ID</th>
                <th class="col">name</th>
                <th class="col">email</th>
                <th class="col">mobile</th>
                <th class="col">password</th>
                <th class="col">action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($sql as $value){?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['name']?></td>
                    <td><?=$value['email']?></td>
                    <td><?=$value['mobile']?></td>
                    <td><?=$value['password']?></td>
                    <td><button class="waves-effect waves-light btn-small blue-grey"><a href="delete.php?id=<?=$value['id']?>"><i class="material-icons">delete</i></a></button></td>
                    <td><button class="waves-effect waves-light btn-small"><a href="update.php?id=<?=$value['id']?>"><i class="material-icons">update</i></a></button></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>