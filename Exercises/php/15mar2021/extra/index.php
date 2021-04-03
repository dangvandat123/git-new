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
    <title>Login Success</title>
</head>
<?php
session_start();
?>
<body class="bg-dark text-white">
    <div class="container-fluid">
        <h4>Đăng nhập thành công</h4>
        <p>Chào mừng bạn, <?php echo $_SESSION["username"];?></p>
        <p>Thời gian hiện tại đang login: <?php echo date('d/m/y H/m/s');?></p>
        <a href="index.php?stateLogin=False" class="text-white">Log out</a>
    </div>
</body>
</html>