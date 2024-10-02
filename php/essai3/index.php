<?php
  require_once("classes3/Animal.class.php");
  require_once("classes3/Chien.class.php");
  
  $chien = new Chien("Rex","Labrador");

  echo $chien->getNom() . "<br />";
  echo $chien->getDateVaccination();

?>