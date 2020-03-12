<?php
 function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$user = Utilisateur::getById(1);

var_dump($user);