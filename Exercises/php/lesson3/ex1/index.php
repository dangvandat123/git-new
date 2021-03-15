
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
    <title>Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            $username = $_POST["username"];
            $password = $_POST["password"];
        } 
    }
    ?>
    <div id="main">
        <div class="bo-te">
            <div class="te">
                <h3>Sign in</h3>
            </div>
        </div>
        <form id="form" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST"  >
                <div class="bo">
                    <div class="form-ground">
                        <input type="text" class="si-ma" name="username" id="username" placeholder="Username" >
                    </div>  
                    <div class="form-ground">
                        <input type="password" class="si-ma" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                
                
            
            
        </form>
    </div>
    </div>
    <div class="text-center">
        <?php
        echo $notice;
        echo $username . "<br>";
        echo $password;
        ?>
    </div>


</body>

</html>

