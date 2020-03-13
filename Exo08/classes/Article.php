<?php
class Article {
    public $id;
    public $titre;
    public $accroche;
    public $contenu;

    public static function getAll() {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM article";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $articles = $stmt->fetchAll();

        return $articles;
    }

    public static function getNextArticles(int $id) {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM article WHERE id >= :id LIMIT 5;";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $articles = $stmt->fetchAll();

        return $articles;
    }

    public static function getById(int $id) : ?Article {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM article WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $article = $stmt->fetch();

        return $article == false ? null : $article;
    }
}