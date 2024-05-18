<?php 

$strings = ["Hello", "World", "PHP", "Programming"];

function reverseStringAndCountVowels($strings){
foreach($strings as $item ){
    $orginalString = $item;
    $reverseString = strrev($item);
    $vowelsCount = 0;

    for($i = 0; $i<strlen($item); $i++){
        if(strtolower($item[$i]) == "a" || 
        strtolower($item[$i]) == "e" ||
        strtolower($item[$i]) == "i" ||
        strtolower($item[$i]) == "o" ||
        strtolower($item[$i]) == "u") {
            $vowelsCount += 1;
        }
    }

    echo "Original String: $orginalString, Vowel Count: $vowelsCount, Reversed String:  $reverseString <br>";
}
}

reverseStringAndCountVowels($strings);


