<?php

namespace RRSVP\Stuf;

class GEMkerngegevens
{

    /**
     * @var Gemeentecoderinge $gemeenteCode
     */
    protected $gemeenteCode = null;

    /**
     * @var Gemeentenaame $gemeenteNaam
     */
    protected $gemeenteNaam = null;

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
     * @return Gemeentecoderinge
     */
    public function getGemeenteCode()
    {
      return $this->gemeenteCode;
    }

    /**
     * @param Gemeentecoderinge $gemeenteCode
     * @return \RRSVP\Stuf\GEM-kerngegevens
     */
    public function setGemeenteCode($gemeenteCode)
    {
      $this->gemeenteCode = $gemeenteCode;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getGemeenteNaam()
    {
      return $this->gemeenteNaam;
    }

    /**
     * @param Gemeentenaame $gemeenteNaam
     * @return \RRSVP\Stuf\GEM-kerngegevens
     */
    public function setGemeenteNaam($gemeenteNaam)
    {
      $this->gemeenteNaam = $gemeenteNaam;
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
     * @return \RRSVP\Stuf\GEM-kerngegevens
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
     * @return \RRSVP\Stuf\GEM-kerngegevens
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
     * @return \RRSVP\Stuf\GEM-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
