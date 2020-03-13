<?php
$chiffre = $_POST['chiffre'];
$diviseur = $_POST['diviseur'];

try {
    if($diviseur == 0)
        throw new Exception('division par zéro');
    echo $chiffre / $diviseur;
}
catch(Exception $e) {
    echo 'Attention la division par zéro est interdite';
}