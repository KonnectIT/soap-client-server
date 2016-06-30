<?php

class VBTantwoord
{

    /**
     * @var Verblijfstitelcodee $aanduiding
     */
    protected $aanduiding = null;

    /**
     * @var Omschrijving100e $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var TijdvakObject $tijdvakObject
     */
    protected $tijdvakObject = null;

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
     * @param TijdvakObject $tijdvakObject
     * @param ExtraElementen $extraElementen
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakObject, $extraElementen, $scope, $verwerkingssoort)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->extraElementen = $extraElementen;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Verblijfstitelcodee
     */
    public function getAanduiding()
    {
      return $this->aanduiding;
    }

    /**
     * @param Verblijfstitelcodee $aanduiding
     * @return VBT-antwoord
     */
    public function setAanduiding($aanduiding)
    {
      $this->aanduiding = $aanduiding;
      return $this;
    }

    /**
     * @return Omschrijving100e
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param Omschrijving100e $omschrijving
     * @return VBT-antwoord
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return TijdvakObject
     */
    public function getTijdvakObject()
    {
      return $this->tijdvakObject;
    }

    /**
     * @param TijdvakObject $tijdvakObject
     * @return VBT-antwoord
     */
    public function setTijdvakObject($tijdvakObject)
    {
      $this->tijdvakObject = $tijdvakObject;
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
     * @return VBT-antwoord
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
     * @return VBT-antwoord
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
     * @return VBT-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
