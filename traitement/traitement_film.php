<?php
/**
 *Ajout d'un film
 */
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");
$film = new Films(["titre"=>"Bad boys","salle"=>'3']);
$insert = new manager();
$insert->insert_film($film);

 ?>
