<?php

class NATgerelateerde
{

    /**
     * @var Nationaliteitcodee $code
     */
    protected $code = null;

    /**
     * @var NationaliteitOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($noValue, $scope, $verwerkingssoort)
    {
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Nationaliteitcodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param Nationaliteitcodee $code
     * @return NAT-gerelateerde
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return NationaliteitOmschrijvinge
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param NationaliteitOmschrijvinge $omschrijving
     * @return NAT-gerelateerde
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
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
     * @return NAT-gerelateerde
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
     * @return NAT-gerelateerde
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
     * @return NAT-gerelateerde
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
