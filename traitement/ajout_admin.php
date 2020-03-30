<?php


/**
 *Inscription admin
 */
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Utilisateur.php");
$tab_admin = array("nom"=>$_POST["nom"],"prenom"=>$_POST["prenom"],"mail"=>$_POST["mail"],"adresse"=>$_POST["adresse"],"admin"=>$_POST["admin"]);
$ut = new Utilisateur($tab_admin);
$manager = new manager();
$manager->ajout_admin($ut);


 ?>
