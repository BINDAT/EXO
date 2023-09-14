<?php
function my_increment($ini){//beginning block function with set $ini

    static $ini = 0; //here is inialize is 0

    $ini++; //call 1

    echo "how many $ini";//ready output
};

my_increment(0); //here function end set to 0
?>