<?php

class WDOkerngegevens
{

    /**
     * @var NummerWOZDeelObjecte $nummerWOZDeelObject
     */
    protected $nummerWOZDeelObject = null;

    /**
     * @var WDOWOZkerngegevens $isOnderdeelVan
     */
    protected $isOnderdeelVan = null;

    /**
     * @var WDOTGOkerngegevens $bestaatUit
     */
    protected $bestaatUit = null;

    /**
     * @var WDOPNDkerngegevens $bestaatUitPand
     */
    protected $bestaatUitPand = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     */
    public function __construct($entiteittype, $noValue, $scope)
    {
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
    }

    /**
     * @return NummerWOZDeelObjecte
     */
    public function getNummerWOZDeelObject()
    {
      return $this->nummerWOZDeelObject;
    }

    /**
     * @param NummerWOZDeelObjecte $nummerWOZDeelObject
     * @return WDO-kerngegevens
     */
    public function setNummerWOZDeelObject($nummerWOZDeelObject)
    {
      $this->nummerWOZDeelObject = $nummerWOZDeelObject;
      return $this;
    }

    /**
     * @return WDOWOZkerngegevens
     */
    public function getIsOnderdeelVan()
    {
      return $this->isOnderdeelVan;
    }

    /**
     * @param WDOWOZkerngegevens $isOnderdeelVan
     * @return WDO-kerngegevens
     */
    public function setIsOnderdeelVan($isOnderdeelVan)
    {
      $this->isOnderdeelVan = $isOnderdeelVan;
      return $this;
    }

    /**
     * @return WDOTGOkerngegevens
     */
    public function getBestaatUit()
    {
      return $this->bestaatUit;
    }

    /**
     * @param WDOTGOkerngegevens $bestaatUit
     * @return WDO-kerngegevens
     */
    public function setBestaatUit($bestaatUit)
    {
      $this->bestaatUit = $bestaatUit;
      return $this;
    }

    /**
     * @return WDOPNDkerngegevens
     */
    public function getBestaatUitPand()
    {
      return $this->bestaatUitPand;
    }

    /**
     * @param WDOPNDkerngegevens $bestaatUitPand
     * @return WDO-kerngegevens
     */
    public function setBestaatUitPand($bestaatUitPand)
    {
      $this->bestaatUitPand = $bestaatUitPand;
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
     * @return WDO-kerngegevens
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

    /**
     * @return NoValue
     */
    public function getNoValue()
    {
      return $this->noValue;
    }

    /**
     * @param NoValue $noValue
     * @return WDO-kerngegevens
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return anonymous82
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param anonymous82 $scope
     * @return WDO-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
