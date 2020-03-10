<?php
    function mon_autoload($class) {
        include 'classes/' . $class . '.php';
    }
    
    spl_autoload_register('mon_autoload');

    $equipeOL = new Equipe("OL", "Lyon");
    $equipeFCN = new Equipe("FCN", "Nantes");


    $equipeOL->joueurs = [
        new Joueur('lyon1', 'Joueur', 1, false),
        new Joueur('lyon2', 'Joueur', 2, false),
        new Joueur('lyon3', 'Joueur', 3, false),
        new Joueur('lyon4', 'Joueur', 4, true),
        new Joueur('lyon5', 'Joueur', 5, false),
        new Joueur('lyon6', 'Joueur', 6, true),
        new Joueur('lyon7', 'Joueur', 7, false),
        new Joueur('lyon8', 'Joueur', 8, false),
        new Joueur('lyon9', 'Joueur', 9, false),
        new Joueur('lyon10', 'Joueur', 10, false),
    ];

    $equipeOL->gardien = new Gardien('gardien', 'Lyon', 11, false);

    $equipeFCN->joueurs = [
        new Joueur('nantes1', 'Joueur', 1, false),
        new Joueur('nantes2', 'Joueur', 2, false),
        new Joueur('nantes3', 'Joueur', 3, false),
        new Joueur('nantes4', 'Joueur', 4, false),
        new Joueur('nantes5', 'Joueur', 5, false),
        new Joueur('nantes6', 'Joueur', 6, false),
        new Joueur('nantes7', 'Joueur', 7, false),
        new Joueur('nantes8', 'Joueur', 8, false),
        new Joueur('nantes9', 'Joueur', 9, false),
        new Joueur('nantes10', 'Joueur', 10, false),
    ];

    $equipeFCN->gardien = new Gardien('gardien', 'Nantes', 11, false);

    $match = new Game($equipeFCN, $equipeOL, new DateTime());


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feuille de match</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1><?php echo $match->equipeDomicile->nom; ?> VS <?php echo $match->equipeExterieur->nom; ?></h1>
        <p>Prévu le <?php echo $match->date->format('d/m/Y'); ?></p>

        <p><?php echo $match->verifierSiToutOK() ? "Le Match peut débuter" : "Le match ne peut pas commencer"; ?></p>
        
        <div id="equipeDomicile" class="cadre">
            <ul>
                <?php
                    foreach($equipeFCN->joueurs as $joueur) {
                        echo '<li>' . $joueur . '</li>';
                    }
                    echo '<li><strong>' . $equipeFCN->gardien . '</strong></li>';
                ?>
            </ul>
        </div>

        <div id="equipeExterieur" class="cadre">
            <ul>
            <?php
                    foreach($equipeOL->joueurs as $joueur) {
                        echo '<li>' . $joueur . '</li>';
                    }
                    echo '<li><strong>' . $equipeOL->gardien . '</strong></li>';
                ?>
            </ul>
        </div>

    </main>
</body>
</html>