<?php
function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$articles = Article::getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main>

        <?php foreach($articles as $article) {?>
        <article>
            <h2><?php echo $article->titre; ?></h2>
            <div class="accroche">
                <?php echo $article->accroche; ?>

                <br/><a href="article.php?id=<?php echo $article->id; ?>">Lire la suite</a>
                <br/>
            </div>
        </article>

        <br/>

        <?php } ?>


    </main>
    
</body>
</html>