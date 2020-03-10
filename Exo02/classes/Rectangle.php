<?php
class Rectangle {
    public $longueur;
    public $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function dessiner() {

        for($j=0; $j < $this->largeur; $j++) {
            for($i=0; $i < $this->longueur; $i++) {
                echo '*';
            }
            echo '<br/>';
        }
    }

    public function dessinerGD() {
        $canvas = imagecreate($this->longueur + 1, $this->largeur + 1);
        imagecolorallocate($canvas, 255, 255, 255);

        imagerectangle($canvas, 0, 0, $this->longueur, $this->largeur,
                        imagecolorallocate($canvas, 0, 0, 0));

        header('Content-Type: image/jpeg');

        imagejpeg($canvas);
        imagedestroy($canvas);
    }
}