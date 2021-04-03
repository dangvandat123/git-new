<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Success Page</title>
</head>
<?php
session_start();
if($_SESSION["stateLogin"]=="fail"){
    header('Location:http://localhost/T3h/Php/Exercise%20Php/15%20Mar%202021/Exercise/Exercise1/login.php?message=true');
}
?>

<body class="bg-dark text-white">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="m-4"><a href="index.php" class="text-white text-decoration-none">Home Page</a></h2>
            <h5 class="m-4"><a href="login.php?stateLogin=fail" class="text-white">Log out</a></h5>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="">Log in success</h3>
        </div>
    </div>
</body>

</html>