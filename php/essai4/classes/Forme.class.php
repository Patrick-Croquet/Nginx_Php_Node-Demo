<?php
abstract class Forme {

    protected $nom;

    public function __contruct($nom) {
        $this->nom=$nom;
    }

    abstract public function calculAire();

    public function getNom(){
        return $this->nom;
    }
        
}

?>