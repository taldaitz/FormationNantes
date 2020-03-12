<?php
abstract class Personnage {
    public $nom;
    public $vie;
    public $force;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract function attaquer(Personnage $adversaire);

    public function afficherDetails() {
        return "
            <li>Nom : $this->nom</li>
            <li>Vie : $this->vie</li>
            <li>Force : $this->force</li>
        ";
    }
}