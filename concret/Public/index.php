<?php

use App\Controller\OrderController;

define("ROOT", dirname(__DIR__));

require ROOT."/Autoloader.php";
Autoloader::register();

$controller = new OrderController();
$controller->renderIndex();