<?php

class ACDkerngegevens
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
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @param TijdvakObject $tijdvakObject
     * @param anonymous82 $scope
     */
    public function __construct($tijdvakObject, $scope)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->scope = $scope;
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
     * @return ACD-kerngegevens
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
     * @return ACD-kerngegevens
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
     * @return ACD-kerngegevens
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
     * @return ACD-kerngegevens
     */
    public function setTijdvakObject($tijdvakObject)
    {
      $this->tijdvakObject = $tijdvakObject;
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
     * @return ACD-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
