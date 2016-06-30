<?php

class RPSgerelateerdeVraagSelectie
{

    /**
     * @var Geslachtsnaame $naam
     */
    protected $naam = null;

    /**
     * @var BsVesNummerOfIde $bsVesNummerOfId
     */
    protected $bsVesNummerOfId = null;

    /**
     * @var KvKNummere $kvkNummer
     */
    protected $kvkNummer = null;

    /**
     * @var CorrespondentieAdresGrpvraagSelectie $adresNederland
     */
    protected $adresNederland = null;

    /**
     * @var VerblijfBuitenlandGrp $adresBuitenland
     */
    protected $adresBuitenland = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param Entiteittype $entiteittype
     */
    public function __construct($entiteittype)
    {
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return Geslachtsnaame
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param Geslachtsnaame $naam
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
      return $this;
    }

    /**
     * @return BsVesNummerOfIde
     */
    public function getBsVesNummerOfId()
    {
      return $this->bsVesNummerOfId;
    }

    /**
     * @param BsVesNummerOfIde $bsVesNummerOfId
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setBsVesNummerOfId($bsVesNummerOfId)
    {
      $this->bsVesNummerOfId = $bsVesNummerOfId;
      return $this;
    }

    /**
     * @return KvKNummere
     */
    public function getKvkNummer()
    {
      return $this->kvkNummer;
    }

    /**
     * @param KvKNummere $kvkNummer
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setKvkNummer($kvkNummer)
    {
      $this->kvkNummer = $kvkNummer;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpvraagSelectie
     */
    public function getAdresNederland()
    {
      return $this->adresNederland;
    }

    /**
     * @param CorrespondentieAdresGrpvraagSelectie $adresNederland
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setAdresNederland($adresNederland)
    {
      $this->adresNederland = $adresNederland;
      return $this;
    }

    /**
     * @return VerblijfBuitenlandGrp
     */
    public function getAdresBuitenland()
    {
      return $this->adresBuitenland;
    }

    /**
     * @param VerblijfBuitenlandGrp $adresBuitenland
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setAdresBuitenland($adresBuitenland)
    {
      $this->adresBuitenland = $adresBuitenland;
      return $this;
    }

    /**
     * @return Entiteittype
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param Entiteittype $entiteittype
     * @return RPS-gerelateerdeVraagSelectie
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
