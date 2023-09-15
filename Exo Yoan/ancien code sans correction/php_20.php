<?php
function spupof(string $str) {
    $result = '';
    $str = strtolower($str); // Convertir en minuscules
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if ($char >= 'a' && $char < 'z') {
            $result .= chr(ord($char) + 1); // Caractère suivant dans l'ordre alphabétique
        } elseif ($char === 'z') {
            $result .= 'a'; // 'z' devient 'a'
        } else {
            $result .= $char; // Conserver les autres caractères inchangés
        }
        $result .= "\n"; // Ajouter un retour à la ligne après chaque caractère
    }

    echo $result;
}

spupof("CoUcOu lEs gEnS");
// Affiche : dpvdpv mŌ hfot
?>
