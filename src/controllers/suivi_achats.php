<?php



function suivi_achats() {

    require_once('src/services/AchatService.php');
    //require_once('src/models/suivi_achats.php');

    $service = new AchatService();

    $achats = $service->findAll();
	
    require('templates/suivi_achats.php');
}

?>