<?php
  require_once("classes/Calculatrice.class.php");

  $calculatrice = new Calculatrice();

  echo "le résultat de l'addition : ".$calculatrice->additionner(2,3,4) ." - ";
  echo "le résultat de la multiplication : ". $calculatrice->multiplier(2,3,4);
?>