<?php
class User {
    public $nom;
    public $prenom;
    public $login;
    private $_password;
    private $_email;

    public function __construct($login, $password, $email)
    {
        $this->login = $login;
        $this->__set('_password', $password);
        $this->__set('_email', $email);
    }

    public function __set($attribute, $value) {
        if($attribute == "_email") {
            if($this->isEmailValid($value)) {
                $this->_email = $value;
            }
        }

        if($attribute == "_password") {
            if(strlen($value) >= 6)
                $this->_password = $value;
        }
    }

    public function __get($attribute) {
        if($attribute == '_email') {
            return $this->_email;
        }
    }

    private function isEmailValid($email) {
        if(strpos($email, '@') !== false)
            return true;
        return false;
    }

    public function __toString()
    {
        return "Bonjour je suis $this->login, mon email est $this->_email 
        et mon Mot de passe est $this->_password";
    }
}