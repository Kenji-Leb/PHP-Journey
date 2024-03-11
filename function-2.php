<?php
// A function that takes a certain operation as a string in its parameter (example: “10 * 5”)
//  and evaluates the operation to get the result (no built-in functions allowed)

function test($str){
   
    $str.trim("$str");
    $char = explode(" ", $str);

    // print_r($char) ;

    $operand1 = (int)$char[0];
    $operator = $char[1];
    $operand2 = (int)$char[2];

    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        case '/':
            return $operand1 / $operand2;
        default:
            return "Invalid operation";
    }
}

echo test("1 - 2")





?>

