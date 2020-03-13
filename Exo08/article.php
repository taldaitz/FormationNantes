<?php
function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$id = $_GET['id'];
$article = Article::getById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>

    <h1><?php echo $article->titre ?></h1>

    <main>
    <?php echo $article->accroche ?>

    <br/>
    <br/>

    <?php echo $article->contenu ?>

    </main>
    
</body>
</html>