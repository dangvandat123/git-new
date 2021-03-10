<?php
    $i = 0;
    $thutu=0;
    while ($i<50) {
        $thutu += $i;
        $i++;
        if ($i == 50) {
            echo "$i";
        }
        else {
            echo $i ."-";
        } 


    }
?>