<?php

class Database {

    private $db;

    private $hostname;
    private $username;
    private $password;
    private $dbname;

    public function __construct() {

        $conf = include('config/config.php');
      
        $this->hostname = $conf["hostname"];
        $this->dbname = $conf["dbname"];
        $this->password = $conf["password"];
        $this->username = $conf["username"];


        try
        {
            $this->db = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname.';charset=utf8',$this->username,$this->password);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        
    }

    public function testConnexion() {

        $id=10;
    
            $sqlQuery = 'SELECT * FROM cabinets WHERE id='.$id;
            $query_statement = $this->db->prepare($sqlQuery);
            $query_statement->execute();
            $res = $query_statement->fetchAll();
            return $res[0]['nom_gcl'];
        
    }
}

?>