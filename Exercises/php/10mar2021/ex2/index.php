<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
            <div class ="col-md-8">
                <div class="jumbotron">
                    <h5>Registration Form</h5>
                </div>
                <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
                    <label for="firstname">First name</label> <br>
                    <input class="form-control" type="text" name="firstname" id="firstname"> <br>
                    <label for="lastname">Last name</label> <br>
                    <input class="form-control" type="text" name="lastname" id="lastname"> <br>
                    <label for="email">Email</label> <br>
                    <input class="form-control" type="email" name="email" id="email"> <br>
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <br>
                    <label for="state">State</label>
                    <select name="select" id="select">
                        <option value="johor">Johor</option>
                        <option value="massachusetts">Massachusetts</option>
                        <option value="washington">Washington</option>
                    </select> <br>
                    <label for="hide">Hobbies</label> <br>
                    <input type="checkbox" name="hobbies" value = "badminton" >
                    <label for="badminton">Badminton</label>
                    <input type="checkbox" name="hobbies" value = "football" >
                    <label for="football">Football</label>
                    <input type="checkbox" name="hobbies" value = "bicycle" >
                    <label for="bicycle">Bicycle</label> <br>
                    <button type="submit" class="btn btn-primary active" >Save record</button>
                    <button type="reset" class="btn btn-default" >Reset</button>
                </form>
            </div>
            <div class="col-md-4">
                    <div class="jumbotron">
                        <h5>Featured</h5>
                    </div>
                    <h6>Special title treatment</h6>
                    <p>With supporting text below as a natural <br> lead-in to additional content</p>
                    <form action="#">
                        <button type="submit" class="btn btn-primary active">Go somewhere</button>
                    </form>
                </div>
            
            </div>
            
        </div>

    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $lastname = $email = $gender = $hobbies = $select = "";
            $firstname =  ($_POST["firstname"]);
            $lastname =  ($_POST["lastname"]);
            $email =  ($_POST["email"]);
            $gender =  ($_POST["gender"]);
            $hobbies =  ($_POST["hobbies"]);
            $select =  ($_POST["select"]);
            
        }
        if ($firstname == "") {
            echo "lỗi vui lòng nhập First name<br>" ;
             
                }
        if ($lastname == "") {
            echo "lỗi vui lòng nhập Last name <br>";
        }
        if ($email == "") {
            echo "lỗi vui lòng nhập email";
        }
        if ($firstname != "") {
            echo "Đăng ký thành công !";
            echo "<br> Fist name :". $firstname ."<br>";
            echo "Last name : ". $lastname ."<br>";
            echo "Email : " .$email ."<br>";
            echo "Gender : " .$gender ."<br>";
            echo "Hobbies : " . $select ."<br>";
            echo "State : " .$hobbies ."<br>";
        }
        

    ?>
    
</body>
</html>