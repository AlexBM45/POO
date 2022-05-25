<?php

require_once('Car.php');
require_once("UberX.php");
require_once('UberPool.php');
require_once('Account.php');
require_once('UberBlack.php');
require_once('UberVan.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool('TYU567', new Account('Andrea Herrera', 'ANDA765'),'Dodge','Attitude');
$uberPool->printdataCar();

$uberBlack = new UberBlack('HTR554', new Account('José Dominguez','JDM872'),'Volkswagen','Jetta');
$uberBlack->printdataCar();

$uberVan = new UberVan('JSW922', new Account('Carolina Menendez','CAR632'),'Dodge','Van');
$uberVan->setPassenger(6);
$uberVan->printdataCar();

?>