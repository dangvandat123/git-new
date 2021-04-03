<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                
                <div class="form-ground">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="a">Nhập số a</label>
                    <input class="form-control" type="text" name="a" id="nhap a">
                    <label for="b">Nhập số b</label>
                    <input class="form-control" type="text" name="b" id="nhapb"> <br>
                    <input type="submit" value="a + b" name="tong" class="p-3 mb-2 bg-success text-white" >
                    <input type="submit" value="a - b" name="hieu" class="p-3 mb-2 bg-primary text-white">
                    <input type="submit" value="a * b" name="tich" class="p-3 mb-2 bg-danger text-white">
                    <input type="submit" value="a / b" name="thuong" class="p-3 mb-2 bg-warning text-dark">

                </form>
                </div>
                
            
            </div>
        </div>
    </div>
    <?php
        $a=$b=$result=$err="";
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if(is_numeric($_POST["a"])&&is_numeric($_POST["b"])){
                $a=$_POST["a"];
                $b=$_POST["b"];
                if(isset($_POST["tong"])){
                    $result=$a+$b;
                }
                if(isset($_POST["hieu"])){
                    $result=$a-$b;
                }
                if(isset($_POST["tich"])){
                    $result=$a*$b;
                }
                if(isset($_POST["thuong"])){
                    $result=$a/$b;
                }
                
            }
            if ($a = $b =="") {
                echo "Không được để trống a hoặc b";
            }
            echo "$result";
        }
    ?>
</body>
</html>