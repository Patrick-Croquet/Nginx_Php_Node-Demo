<?php
class Cercle extends Forme {
    private $rayon;

    public function __construct($nom,$rayon)
    {
        parent:: __construct($nom);
    }

    public function calculAire()
    {
        return pi() * pow($this->rayon,2);
    }
}
?>