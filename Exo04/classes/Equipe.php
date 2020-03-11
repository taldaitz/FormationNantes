<?php
class Equipe {
    public $nom;
    public $ville;
    public $joueurs;
    public $gardien;
    private $entraineur;

    public function __construct($nom, $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function estPreteAJouer() {
        if($this->gardien != null) {
            if($this->countJoueursValides() >= 10) {
                return true;
            }
        }

        return false;
    }

    public function countJoueursValides() {
        $nbJoueursValides = 0;
        foreach($this->joueurs as $joueur) {
            if($joueur->estBlesse === false)
                $nbJoueursValides++;
        }

        return $nbJoueursValides;
    }

    public function setEntraineur(Coach $coach) {
        $this->entraineur = $coach;
        $this->entraineur->equipe = $this;

        return $this;
    }

    public function getEntraineur() {
        return $this->entraineur;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setVille(string $ville) {
        $this->ville = $ville;
        return $this;
    }
}