<?php
/**
 * Classe Animal
 */
class Animal {
    // Propriété
    /**
     * Nom de l'animal
     * 
     * @var string
     */    
    protected $nom;

    // Méthodes
    /**
     * Un setter ou mutateur sert à définir
     * 
     * @param string $nouveauNom
     * @return void
     */
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    /**
     * Un getter ou accesseur sert à  récupérer
     * 
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

}
?>