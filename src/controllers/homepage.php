<?php
// controllers/homepage.php


function homepage() {

    //require_once('src/models/cabinets.php');
    require_once('src/services/CabinetService.php');

    $service = new CabinetService();

    $cabinets = $service->findAll();

   	require('templates/homepage.php');
   
}

?>