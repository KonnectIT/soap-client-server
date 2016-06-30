<?php

namespace RRSVP\Stuf;

class npsLv01prsKinderenVanAanvrager
{

    /**
     * @var stuurgegevensLv01prsNatuurlijkPersoon $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var parametersLv01prsNatuurlijkPersoon $parameters
     */
    protected $parameters = null;

    /**
     * @var NPSvraagSelectieprsr $gelijk
     */
    protected $gelijk = null;

    /**
     * @var scope $scope
     */
    protected $scope = null;

    /**
     * @param stuurgegevensLv01prsNatuurlijkPersoon $stuurgegevens
     * @param parametersLv01prsNatuurlijkPersoon $parameters
     * @param NPSvraagSelectieprsr $gelijk
     * @param scope $scope
     */
    public function __construct($stuurgegevens, $parameters, $gelijk, $scope)
    {
      $this->stuurgegevens = $stuurgegevens;
      $this->parameters = $parameters;
      $this->gelijk = $gelijk;
      $this->scope = $scope;
    }

    /**
     * @return stuurgegevensLv01prsNatuurlijkPersoon
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevensLv01prsNatuurlijkPersoon $stuurgegevens
     * @return \RRSVP\Stuf\npsLv01-prs-KinderenVanAanvrager
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return parametersLv01prsNatuurlijkPersoon
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param parametersLv01prsNatuurlijkPersoon $parameters
     * @return \RRSVP\Stuf\npsLv01-prs-KinderenVanAanvrager
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return NPSvraagSelectieprsr
     */
    public function getGelijk()
    {
      return $this->gelijk;
    }

    /**
     * @param NPSvraagSelectieprsr $gelijk
     * @return \RRSVP\Stuf\npsLv01-prs-KinderenVanAanvrager
     */
    public function setGelijk($gelijk)
    {
      $this->gelijk = $gelijk;
      return $this;
    }

    /**
     * @return scope
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param scope $scope
     * @return \RRSVP\Stuf\npsLv01-prs-KinderenVanAanvrager
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
