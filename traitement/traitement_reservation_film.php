<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");
$reservation = new Reservation(["tarif"=>"2","type_de_tarif"=>"nb_enfant","salle"=>'3',"id_film"=>$_POST['id_film'],"id_utilisateur"=>$_POST['id_utilisateur']]);
$manager = new manager();
$req = $manager->reservation_film($reservation,$_POST["id_utilisateur"]);
if ($req == true) {
    session_start();
    $_SESSION['reservation'] = serialize($reservation);
    header('Location : ../views/recapitulatif_reservation.php?id='.$_POST['id_utilisateur'].'');
}
else {
    header('Location : ../formulaire/reservation_film.php?id='.$_POST["id_film"].'');
}
?>
