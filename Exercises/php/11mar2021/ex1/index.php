<?php
    $string = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
    function countWords($string) {
        $new=explode(" ",$string);
        $array=array();
        for($i=0;$i<count($new);$i++) {
            $count=0;
            foreach($new as $value) {
                if($new[$i] == $value) {
                    $count++;
                }
            }
            $array[$new[$i]]=$count;
        }
        return $array;
    }
    foreach(countWords($string) as $key => $value) {
        echo "[$key] => $value <br>";
    }
?>