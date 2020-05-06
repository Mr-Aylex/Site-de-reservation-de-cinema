<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
$numero = $_GET['numero'];
$manager = new manager();
//$manager->ModifierPlace();
$place = $manager->GetReservation($numero);
var_dump($place);
header('Location: ../views/admin.php');
?>