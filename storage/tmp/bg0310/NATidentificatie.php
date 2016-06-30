<?php

class NATidentificatie
{

    /**
     * @var Nationaliteitcodee $code
     */
    protected $code = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @param NoValue $noValue
     * @param anonymous82 $scope
     */
    public function __construct($noValue, $scope)
    {
      $this->noValue = $noValue;
      $this->scope = $scope;
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
     * @return NAT-identificatie
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return NAT-identificatie
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
     * @return NAT-identificatie
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
