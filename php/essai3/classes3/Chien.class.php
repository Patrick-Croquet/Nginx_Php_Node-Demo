<?php

class Chien extends Animal {
    private $pedigree;

    public function setPedigree($race) {
        $this->pedigree=$race;
    }

    public function getPedigree() {
        return $this->pedigree;
    }

}

?>