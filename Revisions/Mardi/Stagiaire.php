<?php
class Stagiaire {
    public $nom;
    public $prenom;
    public $dateNaissance;
    public $email;

    private $_connaissances;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function apprendre($connaissance) {
        $this->_connaissances[] = $connaissance;
    }

    public function __toString()
    {
        $message = "Bonjour je m'appelle $this->prenom $this->nom, et j'ai les connaissances
        suivantes : <ul>";
        foreach($this->_connaissances as $savoir) {

            $message .= '<li>' . $savoir . '</li>';
        }
        $message .= '</ul>';

        return $message;
    }
}