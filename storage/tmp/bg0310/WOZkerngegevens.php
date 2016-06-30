<?php

class WOZkerngegevens
{

    /**
     * @var WOZObjectNummere $wozObjectNummer
     */
    protected $wozObjectNummer = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var AanduidingWOZobjectGrpkerngegevens $aanduidingWOZobject
     */
    protected $aanduidingWOZobject = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param Entiteittype $entiteittype
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($entiteittype, $verwerkingssoort)
    {
      $this->entiteittype = $entiteittype;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return WOZObjectNummere
     */
    public function getWozObjectNummer()
    {
      return $this->wozObjectNummer;
    }

    /**
     * @param WOZObjectNummere $wozObjectNummer
     * @return WOZ-kerngegevens
     */
    public function setWozObjectNummer($wozObjectNummer)
    {
      $this->wozObjectNummer = $wozObjectNummer;
      return $this;
    }

    /**
     * @return Authentiek
     */
    public function getAuthentiek()
    {
      return $this->authentiek;
    }

    /**
     * @param Authentiek $authentiek
     * @return WOZ-kerngegevens
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return AanduidingWOZobjectGrpkerngegevens
     */
    public function getAanduidingWOZobject()
    {
      return $this->aanduidingWOZobject;
    }

    /**
     * @param AanduidingWOZobjectGrpkerngegevens $aanduidingWOZobject
     * @return WOZ-kerngegevens
     */
    public function setAanduidingWOZobject($aanduidingWOZobject)
    {
      $this->aanduidingWOZobject = $aanduidingWOZobject;
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
     * @return WOZ-kerngegevens
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

    /**
     * @return Verwerkingssoort
     */
    public function getVerwerkingssoort()
    {
      return $this->verwerkingssoort;
    }

    /**
     * @param Verwerkingssoort $verwerkingssoort
     * @return WOZ-kerngegevens
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
