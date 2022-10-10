<?php

function cabinets() {
	
    //require_once('src/models/cabinets.php');
    require_once('src/services/CabinetService.php');

    $service = new CabinetService();

    if (isset($_GET['findByNom']) && $_GET['findByNom'] == "yes") {

        $nom = $_POST["nom"];
        
        $cabinets = $service->findByNom($nom);
        
        return listeDesCabinets($cabinets);
    }

    if (isset($_GET['read']) && $_GET['read'] != "") {

        $id = $_GET["read"];
        
        $cabinet  = $service->get($id);

        return require('templates/cabinets/update.php');
        
    }

    if (isset($_GET['update']) && $_GET['update'] != "") {

        $id = $_GET["update"];
        
        //$cabinet  = $service->get($id);
        //récupérer les variables POST
        $cabinet = post_cabinet($id);
        //créer le cabinet new()
        $service->updateCabinet($cabinet, $id);
        $cabinets = $service->findAll();
        return listeDesCabinets($cabinets);
        
    }

    $cabinets = $service->findAll();
    return listeDesCabinets($cabinets);
  
    
}

function postCabinet($id) {

    return new Cabinet($id,$_POST['nom_gcl'], $_POST['nom_juridique'], $_POST['siret'], $_POST['siren'], $_POST['numero_tva'], $_POST['adresse'], $_POST['code_postal'], $_POST['ville'], $_POST['tel'], $_POST['dossier_dia'], $_POST['ou_ad'], $_POST['attribut_facturation']);
}

function listeDesCabinets($cabinets) {

    // message d'erreur s'il n'y a rien dans la requête SQL (si elle retourne un tableau vide)
    if(sizeof($cabinets) == 0) {
        // renvoyer les erreurs si un autre controller en renvoie ici
        $erreur = "Le cabinet n'existe pas";
    }
    
	require('templates/cabinets.php');

}


?>