<?php

class RDSvraag
{

    /**
     * @var ReisdocumentSoortCodee $code
     */
    protected $code = null;

    /**
     * @var ReisdocumentSoortOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var TijdvakObject $tijdvakObject
     */
    protected $tijdvakObject = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakObject $tijdvakObject
     * @param ExtraElementen $extraElementen
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakObject, $extraElementen, $verwerkingssoort)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->extraElementen = $extraElementen;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return ReisdocumentSoortCodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param ReisdocumentSoortCodee $code
     * @return RDS-vraag
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ReisdocumentSoortOmschrijvinge
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param ReisdocumentSoortOmschrijvinge $omschrijving
     * @return RDS-vraag
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
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
     * @return RDS-vraag
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
     * @return RDS-vraag
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
     * @return RDS-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
