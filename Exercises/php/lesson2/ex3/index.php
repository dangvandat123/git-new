<?php
    $n=1;
    $i=20;
    $tong=0;
    $chia=0;
    while ($n <= 100){
        echo "$n,";
        $tong += $n;
        $n++;
        
    } 
    echo " Tổng = $tong" ."<br>";
    while ($i >=20 and $i <= 50){
        echo "$i,";
        $chia +=$i;
        $i++;
       


    }
    if ($i % 3 ==0) {  
        echo "các só chia hết cho 3 : $i";
    }
    
    
?>