<?php

class AVRvraag
{

    /**
     * @var AardZakelijkRechte $aard
     */
    protected $aard = null;

    /**
     * @var Omschrijving200e $omschrijving
     */
    protected $omschrijving = null;

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
     * @return AardZakelijkRechte
     */
    public function getAard()
    {
      return $this->aard;
    }

    /**
     * @param AardZakelijkRechte $aard
     * @return AVR-vraag
     */
    public function setAard($aard)
    {
      $this->aard = $aard;
      return $this;
    }

    /**
     * @return Omschrijving200e
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param Omschrijving200e $omschrijving
     * @return AVR-vraag
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
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
     * @return AVR-vraag
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
     * @return AVR-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
