<?php
class Admin extends User {

    protected function checkPassword(string $password)
    {
        if(strlen($password) >= 8)
            return true;
        return false;
    }

}