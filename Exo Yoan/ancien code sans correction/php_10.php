<?php
function print_calls(){//beginning block function
static $calls = 0; //here is iniatilize is 0
$calls++; //here is increment simply
echo "this function has been called $calls times"; //output here is egal 1
}
print_calls()//ending block function
?>