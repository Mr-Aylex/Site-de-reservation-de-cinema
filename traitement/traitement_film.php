<?php

require_once("../manager/manager.php");
require_once("../model/Films.php");

$film = Films(["film"=>"Bad boys","salle"=>]);
$insert = manager();
$insert->Film($film);

 ?>
