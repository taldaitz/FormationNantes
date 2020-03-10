<?php
class Game{
    public $equipeDomicile;
    public $equipeExterieur;
    public $date;

    public function __construct(Equipe $domicile, Equipe $exterieur, DateTime $date) {
        $this->equipeDomicile = $domicile;
        $this->equipeExterieur = $exterieur;
        $this->date = $date;
    }

    public function verifierSiToutOK() {
        if( $this->equipeDomicile->estPreteAJouer() && $this->equipeExterieur->estPreteAJouer())
            return true;
        return false;
    }
}