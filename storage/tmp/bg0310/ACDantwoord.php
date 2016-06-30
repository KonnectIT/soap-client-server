<?php

class ACDantwoord
{

    /**
     * @var AcademischeTitelCodee $code
     */
    protected $code = null;

    /**
     * @var AcademischeTitelOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var AcademischeTitelPositiee $positie
     */
    protected $positie = null;

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
     * @return AcademischeTitelCodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param AcademischeTitelCodee $code
     * @return ACD-antwoord
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return AcademischeTitelOmschrijvinge
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param AcademischeTitelOmschrijvinge $omschrijving
     * @return ACD-antwoord
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return AcademischeTitelPositiee
     */
    public function getPositie()
    {
      return $this->positie;
    }

    /**
     * @param AcademischeTitelPositiee $positie
     * @return ACD-antwoord
     */
    public function setPositie($positie)
    {
      $this->positie = $positie;
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
     * @return ACD-antwoord
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
     * @return ACD-antwoord
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
     * @return ACD-antwoord
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
     * @return ACD-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
