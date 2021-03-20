<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
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
                <div class="col-md-12">
                    <form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">               
                        <div class="form-ground">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Your name" >
                        </div> <br>
                        <div class="form-ground">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Your Email Address"> 
                        </div>  <br>
                        <div class="form-ground">
                            <input class="form-control"  type="number" name="phone" id="phone" placeholder="Your Phone Number">
                        </div><br>
                        <div class="form-ground">
                            <input class="form-control" type="url" name="website" id="web" placeholder="Your Web Site starts with http://">
                        </div><br>
                        <div class="form-ground" >
                            <textarea class="form-control" name="message" id="coment" cols="50" rows="5" placeholder="Type your Message Here"></textarea>
                        </div><br>
                        <button type="submit" class="btn btn-danger btn-block">SUBMIT</button>
                    </form>          
                </div>
            </div>
        </div>
    </div>
    <?php
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name =  $email = $phone = $website = $message = "";
            $yourname = ($_POST["name"]);
            $youremail = ($_POST["email"]);
            $yourphone = ($_POST["phone"]);
            $yourweb = ($_POST["website"]);
            $message = ($_POST["message"]);
           
        
        }
        if ($name = $phone = $email = $website = $message =="") {
            echo "Không được để trống các trường";
        }
        if ($name = $email= $website = $phone = $message != "") {
            echo "Your Name : $name <br>" ;
            echo "Your Email : $email <br>";
            echo " Phone Number : $phone <br>";
            echo "Your Website : $website <br>";
            echo "Your message : $message <br>";
        }
    ?>
</body>
</html>