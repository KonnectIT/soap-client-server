<?php

namespace RRSVP\Stuf;

class VBTvraag
{

    /**
     * @var Verblijfstitelcodee $aanduiding
     */
    protected $aanduiding = null;

    /**
     * @var Omschrijving100e $omschrijving
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
     * @return Verblijfstitelcodee
     */
    public function getAanduiding()
    {
      return $this->aanduiding;
    }

    /**
     * @param Verblijfstitelcodee $aanduiding
     * @return \RRSVP\Stuf\VBT-vraag
     */
    public function setAanduiding($aanduiding)
    {
      $this->aanduiding = $aanduiding;
      return $this;
    }

    /**
     * @return Omschrijving100e
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param Omschrijving100e $omschrijving
     * @return \RRSVP\Stuf\VBT-vraag
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
     * @return \RRSVP\Stuf\VBT-vraag
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
     * @return \RRSVP\Stuf\VBT-vraag
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
     * @return \RRSVP\Stuf\VBT-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
