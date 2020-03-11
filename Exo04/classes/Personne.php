<?php
abstract class Personne {
    public $nom;
    public $prenom;
    public $dateNaissance;

    public function __construct(string $nom, string $prenom, Datetime $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

    abstract function sePresenter();
}