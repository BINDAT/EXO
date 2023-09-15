<?php
function destroy_myvar()//set a function name
{
 unset($GLOBALS['myvar']); //set destroy here
}
$myvar='erase'; //var here and content
destroy_myvar(); ?>