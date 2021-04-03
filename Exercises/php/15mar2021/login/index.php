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
    <title>Home Page</title>
</head>
<?php
session_start();
?>

<body>
    <div class="container-fluid bg-dark text-white">
        <div class="d-flex justify-content-between align-items-center">
        <h2 class="m-4"><a href="index.Php" class="text-white">HomePage</a></h2>
            <?php
            if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
                echo '<a href="login.php?destroy=true" class="text-white m-4">Logout</a>';
            } else {
                echo '<div>';
                echo '<a href="login" class="text-white m-4">Login</a>';
                echo '<span>|</span>';
                echo '<a href="register" class="text-white m-4">Register</a>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <?php
                if (isset($_SESSION["username"])){
                    echo "<h1>Hello ".$_SESSION["username"]."</h1>";
                }
            ?>
        </div>
    </div>
</body>

</html>