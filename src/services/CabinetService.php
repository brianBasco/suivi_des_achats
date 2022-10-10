<?php



class CabinetService {

    private $db;

    public function __construct() {
        
        require_once('src/models/Cabinet.php');
        
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=achats;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
 

    private function createCabinet($res) {
        return new Cabinet($res['id'],$res['nom_gcl'], $res['nom_juridique'], $res['siret'], $res['siren'], $res['numero_tva'], $res['adresse'], $res['code_postal'], $res['ville'], $res['tel'], $res['dossier_dia'], $res['ou_ad'], $res['attribut_facturation']);
    }


    public function findAll() {
        $sqlQuery = 'SELECT * FROM cabinets';
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute();
        $res =  $query_statement->fetchAll();

        $tab = array();

        foreach ($res as $cabinet) {
            # code...
            $cab = $this->createCabinet($cabinet);

            array_push($tab, $cab);

        }

        return $tab;
    }

    public function findByNom($nom) {
        $sqlQuery = 'SELECT * FROM cabinets WHERE nom_gcl LIKE ? OR nom_juridique LIKE ?';
        $query_statement = $this->db->prepare($sqlQuery);
        $nom = "%".$nom."%";
        $query_statement->execute(array($nom,$nom));
        $res =  $query_statement->fetchAll();

        $tab = array();

        foreach ($res as $cabinet) {
            # code...
            $cab = $this->createCabinet($cabinet);

            array_push($tab, $cab);

        }

        return $tab;
    }

    public function get($id) {
        
        if($id === "-1") {
            $na = "N/A";
            return new Cabinet(-1,$na,$na,$na,$na,$na,$na,$na,$na,$na,$na,$na,$na,$na,$na); 

        }
        
        $sqlQuery = 'SELECT * FROM cabinets WHERE id='.$id;
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute();
        $res = $query_statement->fetchAll()[0];

        return $this->createCabinet($res);
    }

    public function updateCabinet($cabinet, $id) {

        $sqlQuery = "UPDATE cabinets SET
            nom_gcl=?
            nom_juridique=?
            siren=?
            siret=?
            numero_tva=?
            adresse=?
            code_postal=?
            ville=?
            tel=?
            dossier_dia=?
            ou_ad=?
            attribut_facturation=? WHERE id = ?";

        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute(array(
            $cabinet->getNom_gcl(),
            $cabinet->getNom_juridique(),
            $cabinet->getSiret(),
            $cabinet->getSiren(),
            $cabinet->getNumero_tva(),
            $cabinet->getAdresse(),
            $cabinet->getCode_postal(),
            $cabinet->getVille(),
            $cabinet->getTel(),
            $cabinet->getDossier_dia(),
            $cabinet->getOu_ad(),
            $cabinet->getAttribut_facturation(),
            $id

        ));

    }

}

?>