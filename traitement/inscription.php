<?php
/**
 *Inscription utilisateur
 */
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Utilisateur.php");
$ut = new Utilisateur($_POST);
$manager = new manager();
$manager->insert_Utilisateur($ut);
?>