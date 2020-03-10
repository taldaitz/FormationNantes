<?php

function chargerLesClasses($nomClasse) {
    include $nomClasse.'.php';
}

spl_autoload_register("chargerLesClasses");


$stagiaire = new Stagiaire("Thomas", "Aldaitz");

$stagiaire-> apprendre("POO");
$stagiaire-> apprendre("Syntaxe Php");

echo $stagiaire;