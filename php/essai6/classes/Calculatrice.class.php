<?php

class Calculatrice {
  public function __call($operation,$nombres) {
    if($operation === "additionner"){
        return array_sum($nombres);
    } elseif ($operation === "multiplier") {
        $resultat = 1;
        foreach ($nombres as $nombre){
            $resultat *=$nombre;
        }
    }

    return $resultat;
  }
}
?>