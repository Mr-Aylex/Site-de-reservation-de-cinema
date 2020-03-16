<?php
/**
 * Connexion utilisateur
 */
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Utilisateur.php");
$manager = new manager();
$user = $manager->connexion_utilisateur($_POST['mail'], $_POST['mdp']);
$_SESSION['user'] = serialize($user);
var_dump($user);
//header('Location: ../index.php');
?>