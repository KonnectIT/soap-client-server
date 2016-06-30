<?php

class ZRAkerngegevens
{

    /**
     * @var IdentificatieBRKe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var ZRAZKRkerngegevens $hoortBij
     */
    protected $hoortBij = null;

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
     * @return IdentificatieBRKe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param IdentificatieBRKe $identificatie
     * @return ZRA-kerngegevens
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return ZRAZKRkerngegevens
     */
    public function getHoortBij()
    {
      return $this->hoortBij;
    }

    /**
     * @param ZRAZKRkerngegevens $hoortBij
     * @return ZRA-kerngegevens
     */
    public function setHoortBij($hoortBij)
    {
      $this->hoortBij = $hoortBij;
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
     * @return ZRA-kerngegevens
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
     * @return ZRA-kerngegevens
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
     * @return ZRA-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
