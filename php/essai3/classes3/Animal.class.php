<?php
/**
 * Classe Animal
 */
class Animal {
    // Propriétés
    /**
     * Nom de l'animal
     * 
     * @var string
     */        
    protected $nom;
    /**
     * date de vaccination de l'animal
     * 
     * @var $date
     */
    protected $dateVaccination;

    // Méthodes 
    /**
     * constructeur de l'Animal
     * 
     * @param string
     * */
    public function __construct($nouveauNom) {
        $this->nom = $nouveauNom;
        $this->dateVaccination = date("d-m-Y H:m:s");
    }

    /**
     * Un getter ou accesseur sert à  récupérer
     * 
     * @return string
     */
    public function getNom() {
            return $this->nom;
    }

    /**
     * Un getter ou accesseur sert à  récupérer
     * 
     * @return date
     */
    public function getDateVaccination() {
        return $this->dateVaccination;
    }
}
?>