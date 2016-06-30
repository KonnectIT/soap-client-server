<?php

namespace RRSVP\Stuf;

class ACDvraag
{

    /**
     * @var AcademischeTitelCodee $code
     */
    protected $code = null;

    /**
     * @var AcademischeTitelOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var AcademischeTitelPositiee $positie
     */
    protected $positie = null;

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
     * @return AcademischeTitelCodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param AcademischeTitelCodee $code
     * @return \RRSVP\Stuf\ACD-vraag
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return AcademischeTitelOmschrijvinge
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param AcademischeTitelOmschrijvinge $omschrijving
     * @return \RRSVP\Stuf\ACD-vraag
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return AcademischeTitelPositiee
     */
    public function getPositie()
    {
      return $this->positie;
    }

    /**
     * @param AcademischeTitelPositiee $positie
     * @return \RRSVP\Stuf\ACD-vraag
     */
    public function setPositie($positie)
    {
      $this->positie = $positie;
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
     * @return \RRSVP\Stuf\ACD-vraag
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
     * @return \RRSVP\Stuf\ACD-vraag
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
     * @return \RRSVP\Stuf\ACD-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
