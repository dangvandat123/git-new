<?php
    $i = 2 ;
    $tong=0;
    $binhphuong=0;
    
    while ($i<100) {
        $binhphuong += pow ($i,2);
        $tong += $i;
        $i++;
        if ($i ==50) {
            break;
        }
            
        
    } 
    echo "Tổng = $tong"."<br>";
    echo "Bình phương = $binhphuong";
?>