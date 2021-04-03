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
    <title>Home Page | Login</title>
</head>
<?php
session_start();

$err = "";
if (isset($_GET["stateLogin"])) {
    $_SESSION["stateLogin"] = "fail";
}
if (isset($_SESSION["stateLogin"]) && $_SESSION["stateLogin"] == "success") {
    header('Location:http://localhost/T3h/Php/Exercise%20Php/15%20Mar%202021/Exercise/Exercise1/login_success.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "camnh" && $_POST["password"] == "123456") {
        $_SESSION["stateLogin"] = "success";
        header('Location:http://localhost/T3h/Php/Exercise%20Php/15%20Mar%202021/Exercise/Exercise1/login_success.php ');
    } else {
        $err = "Username or password is incorrect";
    }
}
?>

<body class="bg-dark text-white">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="m-4"><a href="index.php" class="text-white text-decoration-none">Home Page</a></h2>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h3>Login</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-25">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control mt-3" required>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control mt-3" required>
                <span class="text-danger"><?php echo $err; ?></span>
                <input type="submit" value="Login" class="form-control btn btn-primary mt-3">
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET["message"])){
            $message="You must login to access this page.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    ?>
</body>

</html>