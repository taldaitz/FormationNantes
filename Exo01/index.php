<?php

require_once("User.php");
require_once("Role.php");

$roleUser = new Role();
$roleUser->nom = "Utilisateur";
$roleUser->estActif = true;

$roleAdmin = new Role();
$roleAdmin->nom = "Administrateur";
$roleAdmin->estActif = true;

$utilisateur1 = new User('taldaitz', 'toto123', 'taldaitz@gmail.com');
$utilisateur1->nom = 'Aldaitz';
$utilisateur1->prenom = 'Thomas';
$utilisateur1->role = $roleUser;
var_dump($utilisateur1);


$utilisateur2 = new User('rtest', '123toto', 'rtest@gmail.com');
$utilisateur2->nom = "Test";
//$utilisateur2->_email = 'rtest@gmail.com';
$utilisateur2->_password = '123toto';
var_dump($utilisateur2);



echo "Nom : $utilisateur1->nom <br/>";
echo "Prénom : $utilisateur1->prenom <br/>";
echo "Login : $utilisateur1->login <br/><br/>";
echo "Email : $utilisateur1->_email <br/><br/>";


echo "Nom : $utilisateur2->nom <br/>";
echo "Prénom : $utilisateur2->prenom <br/>";
echo "Login : $utilisateur2->login <br/>";
echo "Email : $utilisateur2->_email <br/>";
echo "Mdp : $utilisateur2->_password <br/>";

echo '<br/>';
echo '<br/>';
echo '<br/>';

echo $utilisateur1;
echo '<br/>';
echo $utilisateur2;
echo '<br/>';