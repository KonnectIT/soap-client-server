<?php

namespace RRSVP\Stuf;

class ARVtabel
{

    /**
     * @var AardZakelijkRechtVerkorte $aardVerkort
     */
    protected $aardVerkort = null;

    /**
     * @var Omschrijving100e $omschrijvingVerkort
     */
    protected $omschrijvingVerkort = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return AardZakelijkRechtVerkorte
     */
    public function getAardVerkort()
    {
      return $this->aardVerkort;
    }

    /**
     * @param AardZakelijkRechtVerkorte $aardVerkort
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setAardVerkort($aardVerkort)
    {
      $this->aardVerkort = $aardVerkort;
      return $this;
    }

    /**
     * @return Omschrijving100e
     */
    public function getOmschrijvingVerkort()
    {
      return $this->omschrijvingVerkort;
    }

    /**
     * @param Omschrijving100e $omschrijvingVerkort
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setOmschrijvingVerkort($omschrijvingVerkort)
    {
      $this->omschrijvingVerkort = $omschrijvingVerkort;
      return $this;
    }

    /**
     * @return ExtraElementen
     */
    public function getExtraElementen()
    {
      return $this->extraElementen;
    }

    /**
     * @param ExtraElementen $extraElementen
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
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
     * @return \RRSVP\Stuf\ARV-tabel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
