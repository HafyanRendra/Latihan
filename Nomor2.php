<?php
function isRotation($str1, $str2){
    if (strlen($str1) !== strlen($str2)){
        return false;
    }

    $combinedStr = $str1 . $str1;

    if (strpos($combinedStr, $str2) !== false){
        return true;
    }
    return false;
}

$str1 = "abcdef";
$str2 = "fedcba";

if (isRotation($str1, $str2)){
    echo "$str2 is a rotation of $str1";

} else{
    echo "$str2 is not a rotation of $str1";
}



?>