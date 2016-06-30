<?php

class KWDkerngegevens
{

    /**
     * @var TypeKunstwerke $type
     */
    protected $type = null;

    /**
     * @var IdentificatieIMGeoe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var ScopedNamee $naam
     */
    protected $naam = null;

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
     * @return TypeKunstwerke
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TypeKunstwerke $type
     * @return KWD-kerngegevens
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return IdentificatieIMGeoe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param IdentificatieIMGeoe $identificatie
     * @return KWD-kerngegevens
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return ScopedNamee
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param ScopedNamee $naam
     * @return KWD-kerngegevens
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
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
     * @return KWD-kerngegevens
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
     * @return KWD-kerngegevens
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
     * @return KWD-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
