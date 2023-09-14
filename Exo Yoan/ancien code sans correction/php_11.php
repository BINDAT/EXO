<?php
$nb_a =8; //var 1
$nb_b =2; //var 2
function my_sub(){
global $nb_a, $nb_b; //acces global var
$result = $nb_a - $nb_b; //fuse two global var
$nb_a = $result; //transmit result to var 1
return $result; //return in function and result
}
//call fonction and print result
$result = my_sub(); //pick a var result whit function
echo nl2br("\n result is $result \n"); //print result
echo nl2br("\n nb_a after soustraction $nb_a"); //print nb_a
?>