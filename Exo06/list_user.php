<?php
 function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$users = Utilisateur::getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <table class="table table-striped">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Login</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>

        <?php

            foreach($users as $user) {

                echo '<tr>';
                echo "<td>$user->id</td>";
                echo "<td>$user->login</td>";
                echo "<td>$user->email</td>";
                echo "<td>Supprimer</td>";
                echo '</tr>';

            }

        ?>

        </tbody>
    </table>
    
</body>
</html>