<?php

class Achat {

    private $id;
    private $date_achat;
    private $ref_interne;
    private $facturation;
    private $livraison;
    private $materiel;

    public function __construct($date_achat, $ref_interne, $facturation, $livraison, $materiel) {
        $this->date_achat = $date_achat;
        $this->ref_interne = $ref_interne;
        $this->facturation = $facturation;
        $this->livraison = $livraison;
        $this->materiel = $materiel;

    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_achat
     */ 
    public function getDate_achat()
    {
        return $this->date_achat;
    }

    /**
     * Set the value of date_achat
     *
     * @return  self
     */ 
    public function setDate_achat($date_achat)
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    /**
     * Get the value of ref_interne
     */ 
    public function getRef_interne()
    {
        return $this->ref_interne;
    }

    /**
     * Set the value of ref_interne
     *
     * @return  self
     */ 
    public function setRef_interne($ref_interne)
    {
        $this->ref_interne = $ref_interne;

        return $this;
    }

    /**
     * Get the value of facturation
     */ 
    public function getFacturation()
    {
        return $this->facturation;
    }

    /**
     * Set the value of facturation
     *
     * @return  self
     */ 
    public function setFacturation($facturation)
    {
        $this->facturation = $facturation;

        return $this;
    }

    /**
     * Get the value of livraison
     */ 
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set the value of livraison
     *
     * @return  self
     */ 
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get the value of materiel
     */ 
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set the value of materiel
     *
     * @return  self
     */ 
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }
}

?>