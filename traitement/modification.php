<?php
/**
 * Modification d'un profile utilisateur
 */
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Utilisateur.php");
session_start();
$user = unserialize($_SESSION['user']);
$user->hydrate($_POST);
$manager = new manager();
$manager->modifier_les_donnees_utilisateur($user);
?>