<?php

class WDOWOZkerngegevens
{

    /**
     * @var WOZkerngegevens $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param Entiteittype $entiteittype
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($entiteittype, $verwerkingssoort)
    {
      $this->entiteittype = $entiteittype;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return WOZkerngegevens
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param WOZkerngegevens $gerelateerde
     * @return WDOWOZ-kerngegevens
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
     * @return WDOWOZ-kerngegevens
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return WDOWOZ-kerngegevens
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
