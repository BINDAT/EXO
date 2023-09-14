<?php
function destroy_myvar()//set a function name
{
    global $myvar;//set global var
    unset($myvar);//set a destroy here
}

$myvar = '';//set var and value
destroy_myvar();//set finish function