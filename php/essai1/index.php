<?php
  require_once("classes/Animal.class.php");
  require_once("classes/Chien.class.php");

  $chien = new Chien("");
  $chat  = new Animal("");

  $chien->setNom("Rex");
  $chien->setPedigree("Labrador");
  $chat->setNom("Wilhump");


  echo $chien->getNom(). " - " . $chien->getPedigree() . "<br />";
  echo $chat->getNom();


?>