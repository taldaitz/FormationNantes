<?php
class Game{
    public $equipeDomicile;
    public $equipeExterieur;
    public $date;
    public $arbitre;

    public function __construct(Equipe $domicile, Equipe $exterieur, DateTime $date, 
            Arbitre $arbitre) {
        $this->equipeDomicile = $domicile;
        $this->equipeExterieur = $exterieur;
        $this->date = $date;
        $this->arbitre = $arbitre;
    }

    public function verifierSiToutOK() {
        if( $this->equipeDomicile->estPreteAJouer() && $this->equipeExterieur->estPreteAJouer())
            return true;
        return false;
    }

    public function interview(Personne $personne) {
        return '<p>' . $personne->sePresenter() . '</p>';
    }
}