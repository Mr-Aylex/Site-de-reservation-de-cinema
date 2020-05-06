<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");
$tab_film = array("titre"=>$_POST["titre"],"salle"=>$_POST["salle"],"image"=>$_POST["image"],"resume"=>$_POST["resume"],"bande_annonce"=>$_POST["bande_annonce"],"tweet"=>$_POST["tweet"]);
$film = new Films($tab_film);
$manager = new manager();
$manager->insert_film($film);
 ?>
