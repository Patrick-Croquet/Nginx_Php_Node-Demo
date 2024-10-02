<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
<?php
echo "Bonjour PHP ! <br />";

class Forme {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }
}

class Cercle extends Forme {
    private $rayon;

    public function __construct($nom, $rayon) {
        parent::__construct($nom);
        $this->rayon = $rayon;
    }

    public function calculerAire() {
        return pi() * pow($this->rayon, 2);
    }
}

// Création d'un cercle
$cercle = new Cercle("Cercle", 5);
echo "Le nom de la forme est : " . $cercle->getNom() . "<br />";
echo "L'aire du cercle est : " . $cercle->calculerAire() . "<br />";


class Animal {
    public function faireDuBruit() {
        echo "L'animal fait du bruit.\n";
    }
}

class Chien extends Animal {
    public function faireDuBruit() {
        echo "Ouaf !<br />";
    }
}

class Chat extends Animal {
    public function faireDuBruit() {
        echo "Miaou !\n";
    }
}

// Création des objets
$chien = new Chien("");
$chat = new Chat("");

// Appel de la méthode faireDuBruit() sur chaque objet
$chien->faireDuBruit(); // Affichera "Ouaf !"
$chat->faireDuBruit(); // Affichera "Miaou !"
?>

</body>
</html>