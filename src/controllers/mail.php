<?php


function generer_mail() {

    require_once('src/models/Achat.php');
    require_once('src/services/CabinetService.php');
    require_once('src/services/AchatService.php');
    require_once('src/controllers/erreurs.php');

    if (isset($_GET['generer']) && $_GET['generer'] == "yes") {

        return envoyer_mail();
        
    }

    $cabinetService = new CabinetService();
    
    $facturationID = $_POST['facturation'];
    $livraisonID = $_POST['livraison'];
    $materiel = $_POST['materiel'];
    $ref_interne = $_POST['ref_interne'];

    try {
    $facturation = $cabinetService->get($facturationID);
    $livraison = $cabinetService->get($livraisonID);
    }
    catch (ErrorException $e) {
        $erreur = "Le cabinet n'existe pas!";
        return afficherErreurs($erreur);
    }
    
   
    $achatService = new AchatService();
        
    $date_achat = date('Y-m-d H:i:s');
    //echo $date_achat;
    $achat = new Achat($date_achat, $ref_interne, $facturation, $livraison, $materiel);
    $achatService->ajouter($achat);
       

   	require('templates/mail.php');
}

function envoyer_mail() {


   
    $to      = 'bast620@gmail.com';
    $subject = 'le sujet';
    $message = 'Bonjour !';
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);



}

?>