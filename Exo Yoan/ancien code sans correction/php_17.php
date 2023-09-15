<?php
function array_key(array $arr, int $key) { //function with set arr and key
    if (array_key_exists($key, $arr)) { //get if set if good
        return $arr[$key]; //return arr with key
    } else {//get if bad
        return null;//null if bad
    }
}
//here is my table
$arr = [10, 20, 30, 40, 50]; //my arr
$key = 0; //search key
$result = array_key($arr, $key); //with result arra

//my echo block
if ($result !== null){//if good
    echo "La valeur à l'index $key est : $result";
} else {//if not good
    echo "L'index $key n'existe pas dans le tableau.";
}
?>