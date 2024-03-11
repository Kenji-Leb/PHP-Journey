<?php
// A function that flips the order of digits of a number.

function numFlipper ($num){
    $revNum = 0;
    while ($num > 1)  
    {  
    $rem = $num % 10;  
    $revNum = ($revNum * 10) + $rem;  
    $num = ($num / 10);   
    } 
    echo $revNum;
}
numFlipper(23456)

?>