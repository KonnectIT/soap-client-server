<?php

class gerelateerde
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingTGOe $typering
     */
    protected $typering = null;

    /**
     * @var AdrGrpkerngegevens $adresAanduidingGrp
     */
    protected $adresAanduidingGrp = null;

    /**
     * @param ObjectNummeringe $identificatie
     * @param Authentiek $authentiek
     * @param TyperingTGOe $typering
     * @param AdrGrpkerngegevens $adresAanduidingGrp
     */
    public function __construct($identificatie, $authentiek, $typering, $adresAanduidingGrp)
    {
      $this->identificatie = $identificatie;
      $this->authentiek = $authentiek;
      $this->typering = $typering;
      $this->adresAanduidingGrp = $adresAanduidingGrp;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param ObjectNummeringe $identificatie
     * @return gerelateerde
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
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
     * @return gerelateerde
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingTGOe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingTGOe $typering
     * @return gerelateerde
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return AdrGrpkerngegevens
     */
    public function getAdresAanduidingGrp()
    {
      return $this->adresAanduidingGrp;
    }

    /**
     * @param AdrGrpkerngegevens $adresAanduidingGrp
     * @return gerelateerde
     */
    public function setAdresAanduidingGrp($adresAanduidingGrp)
    {
      $this->adresAanduidingGrp = $adresAanduidingGrp;
      return $this;
    }

}
