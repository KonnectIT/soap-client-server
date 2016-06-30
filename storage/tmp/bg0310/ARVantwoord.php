<?php

class ARVantwoord
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
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param ExtraElementen $extraElementen
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($extraElementen, $scope, $verwerkingssoort)
    {
      $this->extraElementen = $extraElementen;
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
     * @return ARV-antwoord
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
     * @return ARV-antwoord
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
     * @return ARV-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return ARV-antwoord
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
     * @return ARV-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
