<?php

function cabinets() {
	
    //require_once('src/models/cabinets.php');
    require_once('src/services/CabinetService.php');

    $service = new CabinetService();

    if (isset($_GET['id']) && $_GET['id'] !== '') {

        $id = $_GET['id'];
        
        try {
        $cabinets = $service->get($id);
        }
        catch (ErrorException $e) {
            $erreur = "Le cabinet n'existe pas";
        }
    }

    else if (isset($_GET['findByNom']) && $_GET['findByNom'] == "yes") {

        $nom = $_POST["nom"];
        
        $cabinets = $service->findByNom($nom);
        
    }
  
    else $cabinets = $service->findAll();

    // message d'erreur s'il n'y a rien dans la requête SQL (si elle retourne un tableau vide)
    if(sizeof($cabinets) == 0) {
        // renvoyer les erreurs si un autre controller en renvoie ici
        $erreur = "Le cabinet n'existe pas";
    }
    
	require('templates/cabinets.php');
}


?>