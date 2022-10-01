<?php

require_once('src/controllers/homepage.php');
require_once('src/controllers/cabinets.php');
require_once('src/controllers/mail.php');
require_once('src/controllers/suivi_achats.php');

//routeur
//fonctionne avec GET des requêtes /achats/?...
//contrôleur appelé suivant GET['action']

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'cabinets') {
        	return cabinets();
    	}
    if ($_GET['action'] === 'suivi_achats') {
        	return suivi_achats();
    	}
    if ($_GET['action'] === 'mail') {
        	return generer_mail();
    	}
	
    else {
    	echo "Erreur 404 : la page que vous recherchez n'existe pas.";
	}
}
else {
	homepage();
}

?>