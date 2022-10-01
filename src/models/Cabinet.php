<?php
class Cabinet
{
    // déclaration d'une propriété
    private $id;
    private $nom_gcl;
    private $nom_juridique;
    private $siren;
    private $siret;
    private $numero_tva;
    private $adresse;
    private $code_postal;
    private $ville;
    private $tel;
    private $dossier_dia;
    private $ou_ad;
    private $attribut_facturation;
   
    public function __construct($id,$nom_gcl, $nom_juridique, $siret, $siren, $numero_tva, $adresse, $code_postal, $ville, $tel, $dossier_dia, $ou_ad, $attribut_facturation)
    {
        $this->id = $id;
        $this->nom_gcl = $nom_gcl;
        $this->siren = $siren;
        $this->nom_juridique = $nom_juridique;
        $this->siret = $siret;
        $this->numero_tva = $numero_tva;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->tel = $tel;
        $this->dossier_dia = $dossier_dia;
        $this->ou_ad = $ou_ad;
        $this->attribut_facturation = $attribut_facturation;
        
    }




    /**
     * Get the value of nom_gcl
     */ 
    public function getNom_gcl()
    {
        return $this->nom_gcl;
    }

    /**
     * Set the value of nom_gcl
     *
     * @return  self
     */ 
    public function setNom_gcl($nom_gcl)
    {
        $this->nom_gcl = $nom_gcl;

        return $this;
    }

    /**
     * Get the value of nom_juridique
     */ 
    public function getNom_juridique()
    {
        return $this->nom_juridique;
    }

    /**
     * Set the value of nom_juridique
     *
     * @return  self
     */ 
    public function setNom_juridique($nom_juridique)
    {
        $this->nom_juridique = $nom_juridique;

        return $this;
    }

    /**
     * Get the value of siren
     */ 
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * Set the value of siren
     *
     * @return  self
     */ 
    public function setSiren($siren)
    {
        $this->siren = $siren;

        return $this;
    }

    /**
     * Get the value of siret
     */ 
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set the value of siret
     *
     * @return  self
     */ 
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get the value of numero_tva
     */ 
    public function getNumero_tva()
    {
        return $this->numero_tva;
    }

    /**
     * Set the value of numero_tva
     *
     * @return  self
     */ 
    public function setNumero_tva($numero_tva)
    {
        $this->numero_tva = $numero_tva;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

   

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of dossier_dia
     */ 
    public function getDossier_dia()
    {
        return $this->dossier_dia;
    }

    /**
     * Set the value of dossier_dia
     *
     * @return  self
     */ 
    public function setDossier_dia($dossier_dia)
    {
        $this->dossier_dia = $dossier_dia;

        return $this;
    }

    /**
     * Get the value of ou_ad
     */ 
    public function getOu_ad()
    {
        return $this->ou_ad;
    }

    /**
     * Set the value of ou_ad
     *
     * @return  self
     */ 
    public function setOu_ad($ou_ad)
    {
        $this->ou_ad = $ou_ad;

        return $this;
    }

    /**
     * Get the value of attribut_facturation
     */ 
    public function getAttribut_facturation()
    {
        return $this->attribut_facturation;
    }

    /**
     * Set the value of attribut_facturation
     *
     * @return  self
     */ 
    public function setAttribut_facturation($attribut_facturation)
    {
        $this->attribut_facturation = $attribut_facturation;

        return $this;
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
}
?>
