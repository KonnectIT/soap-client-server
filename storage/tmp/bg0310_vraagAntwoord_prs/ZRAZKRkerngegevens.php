<?php

namespace RRSVP\Stuf;

class ZRAZKRkerngegevens
{

    /**
     * @var ZKRkerngegevens $gerelateerde
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
     * @return ZKRkerngegevens
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param ZKRkerngegevens $gerelateerde
     * @return \RRSVP\Stuf\ZRAZKR-kerngegevens
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
     * @return \RRSVP\Stuf\ZRAZKR-kerngegevens
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
     * @return \RRSVP\Stuf\ZRAZKR-kerngegevens
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
