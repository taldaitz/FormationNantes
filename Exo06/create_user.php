<?php
 function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');


$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];


$user = Utilisateur::getInstance($login, $password, $email);
$user->save();