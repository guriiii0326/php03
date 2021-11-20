<?php

function number($max){
    return $max*2;
}
echo number(2);

function sum_number($a,$b){
    return $a+$b;
}
echo "\n".sum_number(1,2);

function kakeru($ar){
    $number=1;
    foreach($ar as $a){
        $number*=$a;
        echo $number."\n";
    }
    return $number;
}
echo "\n".kakeru(array(1,3,5,7,9));

function max_array($arr){
    $max_number=$arr[0];
    foreach($arr as $a){
        if($max_number<$a){
           $max_number=$a;
       }
       echo $max_number."\n";
    }
    return $max_number;
}
echo "\n".max_array(array(5,4,2,3,8,4));
