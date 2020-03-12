<?php
class Magicien extends Personnage {

    public $magie;

    public function __construct(string $nom)
    {
        parent::__construct($nom);
        $this->vie = 90;
        $this->force = 8;
        $this->magie = 20;
    }

    public function attaquer(Personnage $adversaire) {
        if($this->magie >= 3) {
            $adversaire->vie -= 50;
            $this->magie -= 3;
        } else {
            $adversaire->vie -= $this->force * 0.6;
        }
    }

    public function afficherDetails() {
        return parent::afficherDetails() . "
            <li>Magie : $this->magie</li>
        ";
    }

}