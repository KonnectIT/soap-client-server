<?php

class LNDvraag
{

    /**
     * @var Landcodee $code
     */
    protected $code = null;

    /**
     * @var LandcodeIsoe $codeIso
     */
    protected $codeIso = null;

    /**
     * @var Landnaame $naam
     */
    protected $naam = null;

    /**
     * @var TijdvakObject $tijdvakObject
     */
    protected $tijdvakObject = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakObject $tijdvakObject
     * @param ExtraElementen $extraElementen
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakObject, $extraElementen, $noValue, $verwerkingssoort)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->extraElementen = $extraElementen;
      $this->noValue = $noValue;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Landcodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param Landcodee $code
     * @return LND-vraag
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return LandcodeIsoe
     */
    public function getCodeIso()
    {
      return $this->codeIso;
    }

    /**
     * @param LandcodeIsoe $codeIso
     * @return LND-vraag
     */
    public function setCodeIso($codeIso)
    {
      $this->codeIso = $codeIso;
      return $this;
    }

    /**
     * @return Landnaame
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param Landnaame $naam
     * @return LND-vraag
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
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
     * @return LND-vraag
     */
    public function setTijdvakObject($tijdvakObject)
    {
      $this->tijdvakObject = $tijdvakObject;
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
     * @return LND-vraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return LND-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return LND-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
