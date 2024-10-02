<?php

class Oiseau extends Animal implements Volant {

    public function faireDuBruit(){
        echo "Je chante";
    }

    public function voler(){
        echo "Je vole";
    }
}
?>