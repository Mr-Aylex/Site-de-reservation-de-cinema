<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
$name=$_POST['name'];
$manager = new manager();
$manager->ajout_commentaire($_POST['id_film'], $_POST['comm']);
header('Location: ../views/film/film.php?name='.$name);
?>