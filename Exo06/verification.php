<?php
 function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');


$login = $_POST['login'];
$password = $_POST['password'];


$user = Utilisateur::authenticate($login, $password);

if($user != null) {
    echo "Bonjour $user->login, bienvenu sur votre page";
} else {
    header("Location: login.php");
}