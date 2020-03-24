<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");

$reservation = new Reservation(["tarif"=>"2","type_de_tarif"=>"nb_enfant","salle"=>'3',"id_film"=>2,"id_utilisateur"=>3]);
$manager = new manager();
$manager->reservation_film($reservation);
?>
