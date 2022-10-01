<?php
// controllers/homepage.php


function afficherErreurs($erreurs) {

    
   	//require('templates/homepage.php');
    $liste_des_erreurs = array();

    array_push($liste_des_erreurs, $erreurs);

    /* foreach($erreurs as $erreur) {
        # code...
        array_push($liste_des_erreurs, $erreur);
    } */


   
    require('templates/erreurs.php');
   
}

?>