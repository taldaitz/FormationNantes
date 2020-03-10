<?php
class Joueur {
    public $nom;
    public $prenom;
    public $numero;
    public $estBlesse;

    public function __construct($nom, $prenom, $numero, $estBlesse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numero = $numero;
        $this->estBlesse = $estBlesse;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom - $this->numero";
    }
}