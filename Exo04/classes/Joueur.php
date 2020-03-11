<?php
class Joueur extends Personne{
    public $numero;
    public $estBlesse;

    public function __construct(string $nom, string $prenom, Datetime $dateNaissance, 
        int $numero, bool $estBlesse)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numero = $numero;
        $this->estBlesse = $estBlesse;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom - $this->numero";
    }

    public function sePresenter() {
        return "Bonjour, je suis un joueur. Je m'appelle $this->prenom $this->nom 
        et j'ai le numéro $this->numero";
    }
}