<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");
session_start();
$manager = new manager();
$manager->getFilm($_POST['id_film']);
$nb_enfant = number_format($_POST['nb_enfant']);
$nb_16 = number_format($_POST['nb_16']);
$nb_adulte = number_format($_POST['nb_adulte']);
$reservation = 'reservation';
/*
 * Chaque boucle insert les places des differents type de tarif dans la bd et les insert dans un tableau $tab_place
 */
$tab_place = array();
for ($i=0;$i<$nb_enfant;$i++) {
    $reservation = 'reservation'.'_nb_enfant_'.$i;
    $$reservation = new Reservation(["tarif"=>3,"type_de_tarif"=>"Enfant","salle"=>$_POST['salle'],"id_film"=>$_POST['id_film'],"id_utilisateur"=>$_POST['id_utilisateur']]);
    $req = $manager->reservation_film($$reservation,$_POST["id_utilisateur"]);
    array_push($tab_place,$$reservation);
}
for ($i=0;$i<$nb_16;$i++) {
    $reservation = 'reservation'.'_nb_16_'.$i;
    $$reservation = new Reservation(["tarif"=>8.5,"type_de_tarif"=>"Adolescent","salle"=>$_POST['salle'],"id_film"=>$_POST['id_film'],"id_utilisateur"=>$_POST['id_utilisateur']]);
    $req = $manager->reservation_film($$reservation,$_POST["id_utilisateur"]);
    array_push($tab_place,$$reservation);
}
for ($i=0;$i<$nb_adulte;$i++) {
    $reservation = 'reservation'.'_nb_adulte_'.$i;
    $$reservation = new Reservation(["tarif"=>10.5,"type_de_tarif"=>"Adulte","salle"=>$_POST['salle'],"id_film"=>$_POST['id_film'],"id_utilisateur"=>$_POST['id_utilisateur']]);
    $req = $manager->reservation_film($$reservation,$_POST["id_utilisateur"]);
    array_push($tab_place,$$reservation);
}
$_SESSION['dernieres_places'] = $tab_place;
if ($req == true) {
    header('Location: ../views/recapitulatif_reservation.php');
}
else {
    header('Location: ../formulaire/reservation_film.php?id='.$_POST["id_film"].'');
}
?>
