<?php
function my_concat(){//here my var with val
$a ='"Hello'; //here is text one
$b =' World!"'; //here is text two
echo "{$a}{$b}";//and here echo add $a and $b for composite message
}
my_concat();//end block
?>