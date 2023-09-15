<?php
$str1 = "preferisco la casa e freddo"; //my content
$func = ucfirst($str1); //func set first chara in maju

//My function anonyme
(function ($str1){//in set reception 
    echo "$str1"; //set print
}
)
($func);//set transformation
?>