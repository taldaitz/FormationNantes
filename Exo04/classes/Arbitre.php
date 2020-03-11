<?php
class Arbitre extends Personne {
    public $anneeDiplome;

    public function __construct(string $nom, string $prenom, Datetime $dateNaissance
    , int $anneeDiplome)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->anneeDiplome = $anneeDiplome;
    }

    public function sePresenter() {
        return "Bonjour, je suis un arbitre. Je m'appelle $this->prenom $this->nom 
        et j'ai mon diplome depuis $this->anneeDiplome";
    }
}