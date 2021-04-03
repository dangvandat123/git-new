<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <?php
        if(isset($_COOKIE["statusLog"]) && $_COOKIE["statusLog"]=="success"){
            echo "hello admin";
        }else{
            echo '<a href="http://localhost/T3h/Php/Exercise%20Php/13%20Mar%202021/ExtraExercise/login">login</a>';
        }
    ?>
    </div>
</body>

</html>