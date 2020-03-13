<?php
function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$id = $_GET['id'];
$article = Article::getById($id);

if($article == null) {
    die("Cet article n'existe pas.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <h1><?php echo $article->titre ?></h1>

    <main>
    <?php echo $article->accroche ?>

    <br/>
    <br/>

    <?php echo $article->contenu ?>


    <br/>
    <br/>
    <a href="article.php?id=<?php echo $article->id + 1; ?>">Lire l'article suivant</a><br/>
    <a href="#" id="showTextLink">Faire apparaitre Texte</a><br/>
    <div id="texte">

    </div>
    </main>
    
</body>
</html>