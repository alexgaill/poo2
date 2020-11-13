<?php

use App\Animaux\Chat;
use App\Animaux\Chien;
use App\Animaux\Mammifere;

require "../Autoloader.php";
Autoloader::register();



$chien = new Chien("Rex", "Lévrier", "Gris");
$chien2 = new Chien("Medor", "Chihuahua", "Marron");
$chat = new Chat("Caramel", "Siamois", "Blanc et Noir");

Mammifere::setPelage("Noir");
var_dump($chien);
echo "</br>";
echo $chien->getPelage();
echo "</br>";
echo $chien->getNom();
echo "</br>";
echo $chien2->getPelage(); 
echo "</br>";
echo $chat->getPelage();
echo "</br>";
