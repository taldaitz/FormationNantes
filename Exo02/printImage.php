<?php

function mon_autoload($className) {
    include 'classes/' . $className . '.php';
}

spl_autoload_register('mon_autoload');


$rectangle = new Rectangle(400, 80);
$rectangle->dessinerGD();