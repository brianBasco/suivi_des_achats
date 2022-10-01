<?php



class AchatService {

    private $db;
    private $cabinetService;

    public function __construct() {
        
        require_once('src/models/Achat.php');
        require_once('src/models/Cabinet.php');
        require_once('src/services/CabinetService.php');
        
        $this->cabinetService = new CabinetService();
        
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=achats;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
 
    



    public function findAll() {
        $sqlQuery = 'SELECT * FROM suivi_achats';
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute();
        $achats = $query_statement->fetchAll();

        $tab = array();
        foreach ($achats as $achat) {
            
                      
            # code...
            $date_achat = $achat['date_achat'];
            $ref_interne = $achat['ref_interne'];
            $materiel = $achat['materiel'];
            //
                       
            $facturation = $this->cabinetService->get($achat['facturationID']);
            $livraison = $this->cabinetService->get($achat['livraisonID']);
                       
            array_push($tab, new Achat($date_achat, $ref_interne, $facturation, $livraison, $materiel));
        }

        return $tab;        
    }

    public function get($id) {
        $sqlQuery = 'SELECT * FROM suivi_achats WHERE id='.$id;
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute();
        $achat =  $query_statement->fetchAll();
        
        $date_achat = $achat['date_achat'];
        $ref_interne = $achat['resf_interne'];
        $materiel = $achat['materiel'];
        //
        $facturationID = $achat['facturationID'];          
        $livraisonID = $achat['livraisonID'];
              
        $facturation = $this->cabinetService->get($facturationID);
        $livraison = $this->cabinetService->get($livraisonID);
        
        return new Achat($date_achat, $ref_interne, $facturation, $livraison, $materiel);
    }

    public function ajouter(Achat $achat) {

        $date_achat = $achat->getDate_achat();
        $ref_interne = $achat->getRef_interne();
        $facturationID = $achat->getFacturation()->getId();
        $livraisonID = $achat->getLivraison()->getId();
        $materiel = $achat->getMateriel();


        $sqlQuery = 'INSERT INTO suivi_achats (date_achat,ref_interne,facturationID,livraisonID, materiel)
        VALUES(:date_achat,:ref_interne,:facturationID,:livraisonID,:materiel)';
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute(array(
            ':date_achat' => $date_achat,
            ':ref_interne' => $ref_interne,
            ':facturationID' => $facturationID,
            ':livraisonID' => $livraisonID,
            ':materiel' => $materiel));
        return $achat;
    }


}

?>