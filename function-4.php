<?php

// A function to validate an email and a password using Regex.

// preg_match()	Returns 1 if the pattern was found in the string and 0 if not

function validateEP ($email, $pass){
    
    $regexE = "/\@example.com$/";
    $savedPass = "213@@Ab";

    if (preg_match($regexE, $email) && ($pass === $savedPass)){
        echo "found";
    }else{
        echo "Not found";
    }
}

$password = "213@@Ab";
$email = "abc@example.com";

validateEP($email,$password)


?>