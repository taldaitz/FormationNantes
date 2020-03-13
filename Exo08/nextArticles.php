<?php
function mon_autoload($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('mon_autoload');

$id = $_GET['id'];

$articles = Article::getNextArticles($id);

?>

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