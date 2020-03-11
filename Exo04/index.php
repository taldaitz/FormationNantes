<?php
    function mon_autoload($class) {
        include 'classes/' . $class . '.php';
    }
    
    spl_autoload_register('mon_autoload');

    $equipeOL = new Equipe("OL", "Lyon");
    $equipeFCN = new Equipe("FCN", "Nantes");

    $equipeOL->setEntraineur(new Coach('Garcia', 'Rudi', new DateTime("1964-02-20"), "Senior"));
    $equipeFCN->setEntraineur(new Coach('Gourcuff', 'Christian', new DateTime("1955-04-05"), "Senior"));

    // chainage  : $equipeOL->setEntraineur(null)->setNom('toto')->setVille('Lyon');



    $equipeOL->joueurs = [
        new Joueur('lyon1', 'Joueur', new DateTime('2000-12-25') , 1, false),
        new Joueur('lyon2', 'Joueur', new DateTime('2000-12-25') ,2, false),
        new Joueur('lyon3', 'Joueur', new DateTime('2000-12-25') ,3, false),
        new Joueur('lyon4', 'Joueur', new DateTime('2000-12-25') ,4, true),
        new Joueur('lyon5', 'Joueur', new DateTime('2000-12-25') ,5, false),
        new Joueur('lyon6', 'Joueur', new DateTime('2000-12-25') ,6, true),
        new Joueur('lyon7', 'Joueur', new DateTime('2000-12-25') ,7, false),
        new Joueur('lyon8', 'Joueur', new DateTime('2000-12-25') ,8, false),
        new Joueur('lyon9', 'Joueur', new DateTime('2000-12-25') ,9, false),
        new Joueur('lyon10', 'Joueur', new DateTime('2000-12-25') ,10, false),
    ];

    $equipeOL->gardien = new Gardien('gardien', 'Lyon', new DateTime('2000-12-25') ,11, false);

    $equipeFCN->joueurs = [
        new Joueur('nantes1', 'Joueur', new DateTime('2000-12-25') ,1, false),
        new Joueur('nantes2', 'Joueur', new DateTime('2000-12-25') ,2, false),
        new Joueur('nantes3', 'Joueur', new DateTime('2000-12-25') ,3, false),
        new Joueur('nantes4', 'Joueur', new DateTime('2000-12-25') ,4, false),
        new Joueur('nantes5', 'Joueur', new DateTime('2000-12-25') ,5, false),
        new Joueur('nantes6', 'Joueur', new DateTime('2000-12-25') ,6, false),
        new Joueur('nantes7', 'Joueur', new DateTime('2000-12-25') ,7, false),
        new Joueur('nantes8', 'Joueur', new DateTime('2000-12-25') ,8, false),
        new Joueur('nantes9', 'Joueur', new DateTime('2000-12-25') ,9, false),
        new Joueur('nantes10', 'Joueur', new DateTime('2000-12-25') ,10, false),
    ];

    $equipeFCN->gardien = new Gardien('gardien', 'Nantes', new DateTime('2000-12-25') ,11, false);

    $arbitre = new Arbitre('Arbitre', 'Jean', new DateTime('1990-02-15'), 2008);

    $match = new Game($equipeFCN, $equipeOL, new DateTime(), $arbitre);


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
        
        <p>rencontre arbitré par : <?php echo $match->arbitre; ?><p>

        <div id="equipeDomicile" class="cadre">
            <ul>
                <?php
                    foreach($equipeFCN->joueurs as $joueur) {
                        echo '<li>' . $joueur . '</li>';
                    }
                    echo '<li><strong>' . $equipeFCN->gardien . '</strong></li>';
                    echo '<li> entrainé par ' . $equipeFCN->getEntraineur() . '</li>';
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
                    echo '<li> entrainé par ' . $equipeOL->getEntraineur() . '</li>';
                ?>
            </ul>
        </div>


        <div id="salleInterview">
            <?php
                echo $match->interview($arbitre);
                echo $match->interview($equipeOL->getEntraineur());
                echo $match->interview($equipeOL->gardien);
            ?>
        </div>

    </main>
</body>
</html>