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
        
        if($id === "-1") throw new ErrorException("le cabinet n'existe pas !!!");
        
        $sqlQuery = 'SELECT * FROM cabinets WHERE id='.$id;
        $query_statement = $this->db->prepare($sqlQuery);
        $query_statement->execute();
        $res = $query_statement->fetchAll()[0];

        return $this->createCabinet($res);
    }

}

?>