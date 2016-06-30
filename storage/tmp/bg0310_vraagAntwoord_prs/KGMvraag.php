<?php

namespace RRSVP\Stuf;

class KGMvraag
{

    /**
     * @var KadastraleGemeentecodee $code
     */
    protected $code = null;

    /**
     * @var KadastraleGemeentenaame $naam
     */
    protected $naam = null;

    /**
     * @var Booleane $indicatieVervallen
     */
    protected $indicatieVervallen = null;

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
     * @return KadastraleGemeentecodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param KadastraleGemeentecodee $code
     * @return \RRSVP\Stuf\KGM-vraag
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return KadastraleGemeentenaame
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param KadastraleGemeentenaame $naam
     * @return \RRSVP\Stuf\KGM-vraag
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getIndicatieVervallen()
    {
      return $this->indicatieVervallen;
    }

    /**
     * @param Booleane $indicatieVervallen
     * @return \RRSVP\Stuf\KGM-vraag
     */
    public function setIndicatieVervallen($indicatieVervallen)
    {
      $this->indicatieVervallen = $indicatieVervallen;
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
     * @return \RRSVP\Stuf\KGM-vraag
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
     * @return \RRSVP\Stuf\KGM-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
