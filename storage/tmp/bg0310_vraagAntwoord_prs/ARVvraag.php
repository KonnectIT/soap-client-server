<?php

namespace RRSVP\Stuf;

class ARVvraag
{

    /**
     * @var AardZakelijkRechtVerkorte $aardVerkort
     */
    protected $aardVerkort = null;

    /**
     * @var Omschrijving100e $omschrijvingVerkort
     */
    protected $omschrijvingVerkort = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param ExtraElementen $extraElementen
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($extraElementen, $verwerkingssoort)
    {
      $this->extraElementen = $extraElementen;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return AardZakelijkRechtVerkorte
     */
    public function getAardVerkort()
    {
      return $this->aardVerkort;
    }

    /**
     * @param AardZakelijkRechtVerkorte $aardVerkort
     * @return \RRSVP\Stuf\ARV-vraag
     */
    public function setAardVerkort($aardVerkort)
    {
      $this->aardVerkort = $aardVerkort;
      return $this;
    }

    /**
     * @return Omschrijving100e
     */
    public function getOmschrijvingVerkort()
    {
      return $this->omschrijvingVerkort;
    }

    /**
     * @param Omschrijving100e $omschrijvingVerkort
     * @return \RRSVP\Stuf\ARV-vraag
     */
    public function setOmschrijvingVerkort($omschrijvingVerkort)
    {
      $this->omschrijvingVerkort = $omschrijvingVerkort;
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
     * @return \RRSVP\Stuf\ARV-vraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\ARV-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
