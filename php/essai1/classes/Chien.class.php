<?php
/**
 * Classe Chien
 */
class Chien extends Animal {
    // Propriété
    /**
     * Pedigrée du chien
     * 
     * @var string
     */  
    private $pedigree;

    // Méthodes
    /**
     * Un setter ou mutateur sert à définir
     * 
     * @param string $nouveauNom
     * @return void
     */    
    public function setNom($nouveauNom) {
        $this->nom=strtoupper($nouveauNom);
    }


    /**
     * Un setter ou mutateur sert à définir
     *
     * @param string $race
     * @return void
     */
    public function setPedigree(string $race) {
        $this->pedigree=$race;
    }


    /**
     * Un getter ou accesseur sert à  récupérer
     *
     * @return string
     */
    public function getPedigree(): string {
        return $this->pedigree;
    }

}

?>