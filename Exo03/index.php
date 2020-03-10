<?php

function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}

spl_autoload_register('mon_autoload');

$role = new Role();
$role->nom = "Utilisateur";


$utilisateur = new User('taldaitz', 'toto123', 'taldaitz@gmail.com', $role);
$utilisateur->nom = 'Aldaitz';
$utilisateur->prenom = 'Thomas';

echo $utilisateur;
echo '<br/>';
echo '<br/>';

$roleAdmin = new Role();
$roleAdmin->nom = "Administrateur";

$admin = new Admin('admin', 'admin123', 'admin@dawan.fr', $roleAdmin);
$admin->prenom = "Admin";
$admin->nom = "Toto";

echo $admin;
var_dump($admin);