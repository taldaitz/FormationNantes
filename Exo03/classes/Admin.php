<?php
class Admin extends User {

    public $service;

    public function __construct(string $login, 
                                string $password, 
                                string $email,
                                string $service)
    {
        $role = new Role();
        $role->nom = "Administrateur";

        parent::__construct($login, $password, $email, $role);

        $this->service = $service;
    }

    protected function checkPassword(string $password)
    {
        if(strlen($password) >= 8)
            return true;
        return false;
    }

}