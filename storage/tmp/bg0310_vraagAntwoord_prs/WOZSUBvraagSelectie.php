<?php

namespace RRSVP\Stuf;

class WOZSUBvraagSelectie
{

    /**
     * @var SUBgerelateerdeVraagSelectie $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var AanduidingEigenaarGebruikere $aanduidingEigenaarGebruiker
     */
    protected $aanduidingEigenaarGebruiker = null;

    /**
     * @var StatusBelange $statusBelang
     */
    protected $statusBelang = null;

    /**
     * @var StatusMetagegevenNoValue $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var TijdvakRelatie $tijdvakRelatie
     */
    protected $tijdvakRelatie = null;

    /**
     * @var TijdvakGeldigheid $tijdvakGeldigheid
     */
    protected $tijdvakGeldigheid = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param SUBgerelateerdeVraagSelectie $gerelateerde
     * @param TijdvakRelatie $tijdvakRelatie
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($gerelateerde, $tijdvakRelatie, $tijdvakGeldigheid, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->gerelateerde = $gerelateerde;
      $this->tijdvakRelatie = $tijdvakRelatie;
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return SUBgerelateerdeVraagSelectie
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param SUBgerelateerdeVraagSelectie $gerelateerde
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return AanduidingEigenaarGebruikere
     */
    public function getAanduidingEigenaarGebruiker()
    {
      return $this->aanduidingEigenaarGebruiker;
    }

    /**
     * @param AanduidingEigenaarGebruikere $aanduidingEigenaarGebruiker
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setAanduidingEigenaarGebruiker($aanduidingEigenaarGebruiker)
    {
      $this->aanduidingEigenaarGebruiker = $aanduidingEigenaarGebruiker;
      return $this;
    }

    /**
     * @return StatusBelange
     */
    public function getStatusBelang()
    {
      return $this->statusBelang;
    }

    /**
     * @param StatusBelange $statusBelang
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setStatusBelang($statusBelang)
    {
      $this->statusBelang = $statusBelang;
      return $this;
    }

    /**
     * @return StatusMetagegevenNoValue
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param StatusMetagegevenNoValue $inOnderzoek
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return TijdvakRelatie
     */
    public function getTijdvakRelatie()
    {
      return $this->tijdvakRelatie;
    }

    /**
     * @param TijdvakRelatie $tijdvakRelatie
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setTijdvakRelatie($tijdvakRelatie)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
      return $this;
    }

    /**
     * @return TijdvakGeldigheid
     */
    public function getTijdvakGeldigheid()
    {
      return $this->tijdvakGeldigheid;
    }

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setTijdvakGeldigheid($tijdvakGeldigheid)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
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
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
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
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
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
     * @return \RRSVP\Stuf\WOZSUB-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
