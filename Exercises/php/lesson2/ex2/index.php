<?php
    $so = array (1,2,3,4,5,6);
    $so[1] = "1 làsố nhỏ nhất";
    $so[6] = "6 là số lớn nhất";

    echo $so[1]."<br>";
    echo $so[6] ."<br>";
    echo "tổng của các số trong mảng =".array_sum ($so) ."<br>";
    echo "trung bình cộng =".array_sum ($so)%6;
?>