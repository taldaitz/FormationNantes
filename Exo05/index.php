<?php
    function mon_autoload($class) {
        include 'classes/' . $class . '.php';
    }
    spl_autoload_register('mon_autoload');

    session_start();

    if(isset($_SESSION['combat'])) {
        $combat = $_SESSION['combat'];
    } else {
        $combat = new Combat();

        $combat->ajouterCombattant(new Guerrier("Arthur"));
        $combat->ajouterCombattant(new Magicien("Merlin"));
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baston !</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Combat !!</h1>
        <div class="RecapPerso" id="menuPersoA">
            <ul>

                <?php echo $combat->combattants[0]->afficherDetails(); ?>

            </ul>
        </div>
        <div class="RecapPerso" id="menuPersoB">
            <ul>
                <?php echo $combat->combattants[1]->afficherDetails(); ?>
            </ul>
        </div>

        <div id="logCombat">

            <?php
                $combat->lancerCombatTourParTour();
            ?>

            <form><button type="submit">Tour suivant</button></form>

        </div>
    </main>
</body>

<?php $_SESSION['combat'] = $combat; ?>

</html>