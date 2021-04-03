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
                <div class="col-md-12">
                    <div class="form-ground">
                        <div class="jumbotron">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <label for="">Search String</label>
                                <input type="search" name="search" id="string" class="form-control" placeholder="Nhập chuỗi để tìm kiếm nguyên tâm"><br>
                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-primary " class="text-center" >
                                </div>
                            </form>
                        </div>
                       
                    </div>
                
                </div>
                    
                
                
                    
                
            </div>
        </div>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $search = $_POST["search"];
            if ($search == "hEllO TheRe") {
                echo strtolower ("$search");
            }
            
        }
        
    ?>
</body>
</html>