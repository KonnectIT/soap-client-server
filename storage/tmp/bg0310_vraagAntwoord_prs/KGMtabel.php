<?php

namespace RRSVP\Stuf;

class KGMtabel
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
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
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
     * @return \RRSVP\Stuf\KGM-tabel
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
     * @return \RRSVP\Stuf\KGM-tabel
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
     * @return \RRSVP\Stuf\KGM-tabel
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
     * @return \RRSVP\Stuf\KGM-tabel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\KGM-tabel
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
     * @return \RRSVP\Stuf\KGM-tabel
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
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
     * @return \RRSVP\Stuf\KGM-tabel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
