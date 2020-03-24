<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");
var_dump($_POST);
$reservation = new Reservation(["tarif"=>"2","type_de_tarif"=>"nb_enfant","salle"=>'3',"id_film"=>$_POST['id_film'],"id_utilisateur"=>$_POST['id_utilisateur']]);
var_dump($reservation);
$manager = new manager();
$manager->reservation_film($reservation);
?>
