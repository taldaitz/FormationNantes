<?php
class Utilisateur {
    public $id;
    public $login;
    public $password;
    public $email;

    public function save() : void {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', ''); 

        $sql = "INSERT INTO `utilisateur` (`login`,`password`,`email`) VALUES (:l,:p,:e);";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':l', $this->login, PDO::PARAM_STR);
        $stmt->bindValue(':p', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':e', $this->email, PDO::PARAM_STR);

        $stmt->execute();
    }

    public static function getInstance($login, $pw, $email) : Utilisateur {
        $user = new Utilisateur();
        $user->login = $login;
        $user->password = $pw;
        $user->email = $email;

        return $user;
    }

    public static function getById(int $id) : Utilisateur {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM utilisateur WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $user = $stmt->fetch();

        return $user;
    }

    public static function authenticate(string $login, string $password) : ?Utilisateur {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM utilisateur WHERE login = :login AND password = :password";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $user = $stmt->fetch();

        return $user == false ? null : $user;
    }

    public static function getAll() {
        $pdo = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'root', '');
        
        $sql = "SELECT * FROM utilisateur";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $users = $stmt->fetchAll();

        return $users;
    }
}