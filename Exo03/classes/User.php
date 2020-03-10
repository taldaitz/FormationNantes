<?php
class User {
    public $nom;
    public $prenom;
    public $login;
    public $role;
    public $homepage;

    private $_password;
    private $_email;

    public function __construct(    string $login, 
                                    string $password, 
                                    string $email, 
                                    Role $role)
    {
        $this->login = $login;
        $this->__set('_password', $password);
        $this->__set('_email', $email);
        $this->role = $role;

        $this->homepage = new Page();
        $this->homepage->nom = "Mon Profil";
        $this->homepage->url = "/index";
    }

    public function __set($attribute, $value) {
        if($attribute == "_email") {
            if($this->isEmailValid($value)) {
                $this->_email = $value;
            }
        }

        if($attribute == "_password") {
            if($this->checkPassword($value))
                $this->_password = $value;
        }
    }

    public function __get($attribute) {
        if($attribute == '_email') {
            return $this->_email;
        }
    }

    private function isEmailValid(string $email) {
        if(strpos($email, '@') !== false)
            return true;
        return false;
    }

    protected function checkPassword(string $password) {
        if(strlen($password) >= 6)
               return true;
        return false;
    }

    public function __toString()
    {
        return "Bonjour je suis $this->login, mon email est $this->_email 
        et mon Mot de passe est $this->_password.Et mon role est " . $this->role->nom.
        '. Ma page d\'acceuil est ' . $this->homepage->nom;
    }
}