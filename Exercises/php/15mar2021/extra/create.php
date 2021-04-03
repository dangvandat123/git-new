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
    <title>Find Talent Guys | MAKE QUEST</title>
</head>
<?php
$number = 1;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talentguy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question=$_POST["question"];
    $a= $_POST["a"];
    $b= $_POST["b"];
    $c= $_POST["c"];
    $d= $_POST["d"];
    $correct= $_POST["correct"];
    $sql="INSERT INTO quest (quest, answera, answerb,answerc,answerd,correct)
    VALUES ('$question','$a', '$b','$c','$d', '$correct')";
    $conn->query($sql);
}
$conn->close();
?>

<body class="bg-dark text-white">
    <div class="container">
        <a href="index.php" class="text-white m-5">Return home</a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mt-5 mx-auto">
            <h4>Question <?php echo $number; ?></h4>
            <input type="text" name="question" id="question" class="form-control mb-3" required placeholder="Type your question">
            <div class="d-flex justify-content-around">
                <div class="col-6">
                    <label for="A">Answer A:</label>
                    <input type="text" name="a" id="A" class="form-control mb-3" required>
                </div>
                <div class="col-6">
                    <label for="B">Answer B:</label>
                    <input type="text" name="b" id="B" class="form-control mb-3" required>
                </div>
                <div class="col-6">
                    <label for="C">Answer C:</label>
                    <input type="text" name="c" id="C" class="form-control mb-3" required>
                </div>
                <div class="col-6">
                    <label for="D">Answer D:</label>
                    <input type="text" name="d" id="D" class="form-control mb-3" required>
                </div>
            </div>
            <input type="text" name="correct" id="correct" class="form-control mb-3" required placeholder="Correct Answer">
            <button type="submit" class="btn btn-outline-info form-control">Create</button>

        </form>
    </div>
</body>

</html>