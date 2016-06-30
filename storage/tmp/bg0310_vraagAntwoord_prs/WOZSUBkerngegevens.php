<?php

namespace RRSVP\Stuf;

class WOZSUBkerngegevens
{

    /**
     * @var SUBkerngegevens $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @param SUBkerngegevens $gerelateerde
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     */
    public function __construct($gerelateerde, $entiteittype, $scope)
    {
      $this->gerelateerde = $gerelateerde;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
    }

    /**
     * @return SUBkerngegevens
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param SUBkerngegevens $gerelateerde
     * @return \RRSVP\Stuf\WOZSUB-kerngegevens
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
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
     * @return \RRSVP\Stuf\WOZSUB-kerngegevens
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
     * @return \RRSVP\Stuf\WOZSUB-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
