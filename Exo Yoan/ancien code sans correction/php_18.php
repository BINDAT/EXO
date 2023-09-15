<?php
function get_args(...$args){
    return $args;
}

function get_last_arg(...$args){
    $numArgs = count($args);
    if ($numArgs > 0) {
        return $args[$numArgs - 1];
    } else {
        return null;
    }
}

$argsArray = get_args(1, 'foo', true, ['a', 'b']);
$lastArg = get_last_arg('apple', 'banana', 'cherry');

echo $lastArg; // Affiche le dernier argument du tableau
print_r($argsArray); // Affiche le tableau des arguments
?>
