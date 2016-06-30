<?php

namespace RRSVP\Stuf;

class AOAgerelateerde
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingAOAe $typering
     */
    protected $typering = null;

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var WoonplaatsNaamNene $wplwoonplaatsNaamNen
     */
    protected $wplwoonplaatsNaamNen = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

    /**
     * @var Huisnummeringe $huisnummer
     */
    protected $huisnummer = null;

    /**
     * @var Huisletteringe $huisletter
     */
    protected $huisletter = null;

    /**
     * @var Huisnummertoevoeginge $huisnummertoevoeging
     */
    protected $huisnummertoevoeging = null;

    /**
     * @var Postcodee $postcode
     */
    protected $postcode = null;

    /**
     * @var Straatnaame $gorstraatnaam
     */
    protected $gorstraatnaam = null;

    /**
     * @var WoonplaatsWaarinGelegenGrp $woonplaatsWaarinGelegen
     */
    protected $woonplaatsWaarinGelegen = null;

    /**
     * @var InOnderzoekAOA $inOnderzoek
     */
    protected $inOnderzoek = null;

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
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param ObjectNummeringe $identificatie
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return Authentiek
     */
    public function getAuthentiek()
    {
      return $this->authentiek;
    }

    /**
     * @param Authentiek $authentiek
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingAOAe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingAOAe $typering
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getWplwoonplaatsNaam()
    {
      return $this->wplwoonplaatsNaam;
    }

    /**
     * @param NaamgevingObjecte $wplwoonplaatsNaam
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
      return $this;
    }

    /**
     * @return WoonplaatsNaamNene
     */
    public function getWplwoonplaatsNaamNen()
    {
      return $this->wplwoonplaatsNaamNen;
    }

    /**
     * @param WoonplaatsNaamNene $wplwoonplaatsNaamNen
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setWplwoonplaatsNaamNen($wplwoonplaatsNaamNen)
    {
      $this->wplwoonplaatsNaamNen = $wplwoonplaatsNaamNen;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getGoropenbareRuimteNaam()
    {
      return $this->goropenbareRuimteNaam;
    }

    /**
     * @param NaamgevingObjecte $goropenbareRuimteNaam
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setGoropenbareRuimteNaam($goropenbareRuimteNaam)
    {
      $this->goropenbareRuimteNaam = $goropenbareRuimteNaam;
      return $this;
    }

    /**
     * @return Huisnummeringe
     */
    public function getHuisnummer()
    {
      return $this->huisnummer;
    }

    /**
     * @param Huisnummeringe $huisnummer
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setHuisnummer($huisnummer)
    {
      $this->huisnummer = $huisnummer;
      return $this;
    }

    /**
     * @return Huisletteringe
     */
    public function getHuisletter()
    {
      return $this->huisletter;
    }

    /**
     * @param Huisletteringe $huisletter
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setHuisletter($huisletter)
    {
      $this->huisletter = $huisletter;
      return $this;
    }

    /**
     * @return Huisnummertoevoeginge
     */
    public function getHuisnummertoevoeging()
    {
      return $this->huisnummertoevoeging;
    }

    /**
     * @param Huisnummertoevoeginge $huisnummertoevoeging
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging)
    {
      $this->huisnummertoevoeging = $huisnummertoevoeging;
      return $this;
    }

    /**
     * @return Postcodee
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param Postcodee $postcode
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return Straatnaame
     */
    public function getGorstraatnaam()
    {
      return $this->gorstraatnaam;
    }

    /**
     * @param Straatnaame $gorstraatnaam
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setGorstraatnaam($gorstraatnaam)
    {
      $this->gorstraatnaam = $gorstraatnaam;
      return $this;
    }

    /**
     * @return WoonplaatsWaarinGelegenGrp
     */
    public function getWoonplaatsWaarinGelegen()
    {
      return $this->woonplaatsWaarinGelegen;
    }

    /**
     * @param WoonplaatsWaarinGelegenGrp $woonplaatsWaarinGelegen
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setWoonplaatsWaarinGelegen($woonplaatsWaarinGelegen)
    {
      $this->woonplaatsWaarinGelegen = $woonplaatsWaarinGelegen;
      return $this;
    }

    /**
     * @return InOnderzoekAOA
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekAOA $inOnderzoek
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return \RRSVP\Stuf\AOA-gerelateerde
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
     * @return \RRSVP\Stuf\AOA-gerelateerde
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
     * @return \RRSVP\Stuf\AOA-gerelateerde
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
     * @return \RRSVP\Stuf\AOA-gerelateerde
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
     * @return \RRSVP\Stuf\AOA-gerelateerde
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
