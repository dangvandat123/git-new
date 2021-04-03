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
    <title>Php Login</title>
</head>
<?php
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname="account";

$err="";

session_start();
function logout() {
    session_destroy();
}
if(isset($_GET["destroy"])){
    logout();
}
// Create connection
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT username,password FROM login WHERE username='$username' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0) {
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        header("Location: http://localhost/T3h/Php/Exercise%20Php/15%20Mar%202021/PHP_Login/");
    }else{
        $err="Username or password is incorrect";
    }
}
$conn->close();
?>

<body class="bg-dark text-white">
    <h2 class="m-4"><a href="index.Php" class="text-white">HomePage</a></h2>
    <div class="container w-25 mx-auto">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1 class="text-center">Login</h1>
            <span class="text-danger"><?php echo $err; ?></span>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control mt-3" placeholder="Username" required oninvalid="this.setCustomValidity('Username is required')" onchange="this.setCustomValidity('')">
                <input type="password" name="password" id="password" class="form-control mt-3" placeholder="Password" required oninvalid="this.setCustomValidity('Password is required')" onchange="this.setCustomValidity('')">
            </div>
            <div class="form-group d-flex justify-content-center">
                <input type="submit" value="Login" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-outline-primary ml-3">
            </div>
        </form>
    </div>
</body>

</html>