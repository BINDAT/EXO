<?php
function calc(string $operation, int $nb1, int $nb2) {//set multiple case
    switch ($operation) {
        case '+': //operator add
            return $nb1 + $nb2; //here operation
        case '*': //operator mult
            return $nb1 * $nb2; //here operation
        case '/': // operator div
            if ($nb2 != 0) {
                return $nb1 / $nb2; //here operation
            } else {//not possible
                return "Division par zéro impossible";
            }
        case '%': //operator pourcent
            if ($nb2 != 0) {
                return $nb1 % $nb2; //here operation
            } else { //not possible
                return "Modulo par zéro impossible";
            }
        case '-': //operator sous
            return $nb1 - $nb2; //here operation
        default: //not possible
            return "Opération non valide";
    }
}

// my echo print result
echo calc("%", 5, 2); // print operator : 1
//one is op
//two is nb1
//three is nb2
//and print all
?>
