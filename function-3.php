<?php

// A function that filters out numbers from a string and 
// returns a sorted array of these numbers 
// (example: hpd12aq3@8w$5 will return [3, 5, 8, 12])


function searchArray($array, $searchTerm)
{
    $new_arr = [];
    $index = array_search($searchTerm, $array);

    if ($index != false) {
        array_push($new_arr,$index);       
    } else {
        return "'$searchTerm' was not found in array";
    }
    return $new_arr;

}

$array = ["hpd12aq3@8w$5"];
$searchTerm = [0,1,2,3,4,5,6,7,8,9];








?>