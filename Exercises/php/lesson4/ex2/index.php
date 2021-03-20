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
<?php
    function countWords($str)
    {
        $new = explode(" ", $str);
        $arrayCount = array();
        for ($i = 0; $i < count($new); $i++) {
            $count = 0;
            foreach ($new as $value) {
                if ($new[$i] == $value) {
                    $count++;
                }
            }
            $arrayCount[$new[$i]] = $count;
        }
        return $arrayCount;
    }
    ?>
    <div class="container-fluid text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
            <input type="text" name="string" id="string" placeholder="Type Your String Here" > <br> <br>
            <input type="submit" name="count" id="count" value="Count Words" class="btn btn-primary">
        </form>
        <table class="table-bordered  w-25 mx-auto mt-5">
            <tr class="text-warning">
                <td>Words</td>
                <td>Count</td>
            </tr>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach (countWords($_POST["string"]) as $key => $value) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>