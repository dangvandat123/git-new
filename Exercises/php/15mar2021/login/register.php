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
$dbname = "account";

$err = "";
// Create connection
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repass = $_POST["repass"];
    if ($password == $repass) {
        $sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";
        $result = $conn->query($sql);
    } else {
        $err = "Password is not matched";
    }
}
$conn->close();
?>

<body class="bg-dark text-white">
    <h2 class="m-4"><a href="index.Php" class="text-white">HomePage</a></h2>
    <div class="container w-25 mx-auto">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1 class="text-center">Register</h1>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control mt-3" placeholder="Username" required oninvalid="this.setCustomValidity('Username is required')" onchange="this.setCustomValidity('')">
                <input type="password" name="password" id="password" class="form-control mt-3" placeholder="Password" required oninvalid="this.setCustomValidity('Password is required')" onchange="this.setCustomValidity('')">
                <input type="password" name="repass" id="repass" class="form-control mt-3" placeholder="Confirm Password" required oninvalid="this.setCustomValidity('Password is required')" onchange="this.setCustomValidity('')">
                <span class="text-danger"><?php echo $err; ?></span>
            </div>
            <div class="form-group d-flex justify-content-center">
                <input type="submit" value="Register" class="btn btn-outline-info">
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST["password"] == $_POST["repass"]) {
            $message = "Successful registration";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    ?>
</body>

</html>