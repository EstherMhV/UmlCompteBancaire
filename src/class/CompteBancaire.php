<?php

class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }


    public function depot($somme) {
        $this->solde += $somme;
    }

    public function retrait($somme) {
        $this->solde -= $somme;
    }


    public function affiche() {
        echo "Le solde de " . $this->nom . " est de " . $this->solde . " euros.\n";
    }
}




?>
