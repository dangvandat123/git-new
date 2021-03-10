<?php
    $sodien = 1000;
    $hoadon = 0;
    if ($sodien<=100) {
        $hoadon = $sodien * 450;
    }
    if ($sodien>100 and $sodien <= 200) {
        $hoadon = $sodien * 600;
    }
    if ($sodien>200 and $sodien<=300) {
        $hoadon = $sodien * 750 ;
    }
    if ($sodien > 300 and $sodien <=500) {
        $hoadon = $sodien * 900;
    }
    if ($sodien > 500 and $sodien<=1000 ) {
        $hoadon = $sodien * 1000;
    }
    if ($sodien >=1000 ) {
        $hoadon = $sodien * 1200;
    }
    echo "Số tiền điện = $hoadon KW"."<br>";
    echo " Sau khi tính thêm thuế VAT = ".($hoadon + $hoadon)*0.1 ;
?>