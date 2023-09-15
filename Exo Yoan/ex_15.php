<?php
function func_teacher(){//beging block teacher
    echo "I am Teacher"."<br>"; //here is simply echo no var with return lign with html
};
func_teacher();

function func_student(){//here beging block student 
    $name_student = "Maxime"; //here var student content name for val
    echo nl2br (" \n I am student and my name is $name_student"); //here echo message with val content
};
func_student()
?>