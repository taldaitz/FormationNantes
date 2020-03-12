<?php
class Combat {
    public $combattants;

    public function ajouterCombattant(Personnage $combattant) {
        $this->combattants[] = $combattant;
    }

    public function lancerCombat() {

        while(true) {
            $this->lancerTour();

            if($this->combattants[0]->vie <= 0) {
                echo "<p>Youpi ! " . $this->combattants[1]->nom .  " a gagné !</p>";
                break;
            }

            if($this->combattants[1]->vie <= 0) {
                echo "<p>Youpi ! " . $this->combattants[0]->nom .  " a gagné !</p>";
                break;
            }
        }

    }

    public function lancerCombatTourParTour() {
        $this->lancerTour();

        if($this->combattants[0]->vie <= 0) {
            echo "<p>Youpi ! " . $this->combattants[1]->nom .  " a gagné !</p>";
            session_destroy();
        }

        if($this->combattants[1]->vie <= 0) {
            echo "<p>Youpi ! " . $this->combattants[0]->nom .  " a gagné !</p>";
            session_destroy();
        }
    }

    public function lancerTour() {
        for($i = 0; $i <2; $i++) {
            if($this->combattants[0]->vie <= 0)
                break;

            $degats = $this->combattants[1]->vie;
            echo '<p>' . $this->combattants[0]->nom . ' attaque ' . $this->combattants[1]->nom . '</p>';
            $this->combattants[0]->attaquer($this->combattants[1]);
            $degats -= $this->combattants[1]->vie;
            echo '<p>Il lui fait ' . $degats .' de dégats.Il reste à ' . $this->combattants[1]->nom . ' ' . $this->combattants[1]->vie . ' points de vie.</p>';

            $this->combattants = array_reverse($this->combattants);
        }
    }
}