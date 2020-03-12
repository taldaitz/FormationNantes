<?php
class Guerrier extends Personnage {
    
    public function __construct(string $nom)
    {
        parent::__construct($nom);
        $this->vie = 150;
        $this->force = 20;
    }

    public function attaquer(Personnage $adversaire) {
        $adversaire->vie -= $this->force * 1.2;
    }
}