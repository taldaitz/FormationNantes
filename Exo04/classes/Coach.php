<?php
class Coach extends Personne {
    public $niveau;
    public $equipe;

    public function __construct(string $nom, string $prenom, Datetime $dateNaissance
    , string $niveau)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->niveau = $niveau;
    }

    public function sePresenter() {
        return "Bonjour, je suis un entraineur. Je m'appelle $this->prenom $this->nom 
        et j'entraine l'équipe " . $this->equipe->nom;
    }
}