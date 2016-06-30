<?php

class HHDkerngegevens
{

    /**
     * @var HuishoudenNummere $nummer
     */
    protected $nummer = null;

    /**
     * @var HHDTGOkerngegevens $isGehuisvestIn
     */
    protected $isGehuisvestIn = null;

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
     * @return HuishoudenNummere
     */
    public function getNummer()
    {
      return $this->nummer;
    }

    /**
     * @param HuishoudenNummere $nummer
     * @return HHD-kerngegevens
     */
    public function setNummer($nummer)
    {
      $this->nummer = $nummer;
      return $this;
    }

    /**
     * @return HHDTGOkerngegevens
     */
    public function getIsGehuisvestIn()
    {
      return $this->isGehuisvestIn;
    }

    /**
     * @param HHDTGOkerngegevens $isGehuisvestIn
     * @return HHD-kerngegevens
     */
    public function setIsGehuisvestIn($isGehuisvestIn)
    {
      $this->isGehuisvestIn = $isGehuisvestIn;
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
     * @return HHD-kerngegevens
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
     * @return HHD-kerngegevens
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
     * @return HHD-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
