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
    <title>Login page</title>
</head>
<?php
session_start();
$err="";
$_SESSION["username"] = "admin";
$_SESSION["password"] = "123456";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["username"]==$_SESSION["username"]&&$_POST["password"]==$_SESSION["password"]){
        header('Location: http://localhost/T3h/Php/Exercise%20Php/15%20Mar%202021/Exercise/Exercise2/login_success.php');
    }else{
        $err="Username or password is incorrect";
    }
}

?>
<body class="bg-dark text-white">
    <div class="container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto bg-info">
            <h3 class="text-center mt-5 pt-5">Login</h3>
            <span class="text-center text-danger d-block"><?php echo $err;?></span>
            <div class="form-group w-75 mx-auto my-3 pb-5">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-2" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-2" required>
                <input type="checkbox" name="rememberAcc" id="rememberAcc">
                <label for="rememberAcc">Remember me</label>
                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-success d-block">
            </div>
        </form>
    </div>
</body>

</html>