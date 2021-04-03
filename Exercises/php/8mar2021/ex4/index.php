<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ma = "EV2009";
        $tenvama = "Tấm hợp kim nhôm ngoài trời EV2009";
        $chuluong = "500";
        $chutien = "160000";
        $chuVAT = "0.05";
        echo "Khai báo mã sản phẩm là $ma, tên sản phẩm là $tenvama với số lượng là $chuluong và đơn giá là $chutien. Đồng thời khai báo hằng số VAT là $chuVAT". "<br><br>";
        
        $soluong =500;
        $sotien =160000;
        $soVAT =0.05;
        echo "Trước khi trừ thuế VAT =". $soluong * $sotien . "<br>" ;
        echo "Sau khi trừ thuế VAT =". $soluong * $sotien * $soVAT;


        

    ?>
</body>
</html>