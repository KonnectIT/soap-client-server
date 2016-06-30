<?php

class vesLv01prsVestiging
{

    /**
     * @var stuurgegevensLv01prsVestiging $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var parametersLv01prsVestiging $parameters
     */
    protected $parameters = null;

    /**
     * @var VESvraagSelectieprsr $gelijk
     */
    protected $gelijk = null;

    /**
     * @var scope $scope
     */
    protected $scope = null;

    /**
     * @param stuurgegevensLv01prsVestiging $stuurgegevens
     * @param parametersLv01prsVestiging $parameters
     * @param VESvraagSelectieprsr $gelijk
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
     * @return stuurgegevensLv01prsVestiging
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevensLv01prsVestiging $stuurgegevens
     * @return vesLv01-prs-Vestiging
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return parametersLv01prsVestiging
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param parametersLv01prsVestiging $parameters
     * @return vesLv01-prs-Vestiging
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return VESvraagSelectieprsr
     */
    public function getGelijk()
    {
      return $this->gelijk;
    }

    /**
     * @param VESvraagSelectieprsr $gelijk
     * @return vesLv01-prs-Vestiging
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
     * @return vesLv01-prs-Vestiging
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
