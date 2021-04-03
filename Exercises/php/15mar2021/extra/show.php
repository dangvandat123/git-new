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
    <title>Find Talent Guys | ANSWER QUEST</title>
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
$sql = "SELECT * FROM quest WHERE id='$number'";
$result = $conn->query($sql);
$conn->close();
?>

<body class="bg-dark text-white">
    <div class="container-fluid">
        <div class="mb-5">
            <h4>Question:<?php echo $number; ?></h4>
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <p><?php echo $row['quest']; ?></p> <br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <input type="radio" name="a" id="a"><label for="a">A:<?php echo $row['answera']; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="b" id="b"><label for="b">B:<?php echo $row['answerb']; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="c" id="c"><label for="c">C:<?php echo $row['answerc']; ?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="d" id="d"><label for="d">D:<?php echo $row['answerd']; ?></label>
                        </div>
                    </form>
            <?php }
            } ?>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="show.php?question=1">1</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=2">2</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=3">3</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=4">4</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=5">5</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=6">6</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=7">7</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=8">8</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=9">9</a></li>
                <li class="page-item"><a class="page-link" href="show.php?question=10">10</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>