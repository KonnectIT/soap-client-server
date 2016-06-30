<?php

namespace RRSVP\Stuf;

class AanduidingWOZobjectGrpbasis
{

    /**
     * @var ObjectNummeringe $aoaidentificatie
     */
    protected $aoaidentificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingAdrWOZe $typering
     */
    protected $typering = null;

    /**
     * @var WoonplaatsNaame $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var WoonplaatsWaarinGelegenGrp $aoawoonplaatsWaarinGelegen
     */
    protected $aoawoonplaatsWaarinGelegen = null;

    /**
     * @var Postcodee $aoapostcode
     */
    protected $aoapostcode = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

    /**
     * @var Straatnaame $gorstraatnaam
     */
    protected $gorstraatnaam = null;

    /**
     * @var Huisnummeringe $aoahuisnummer
     */
    protected $aoahuisnummer = null;

    /**
     * @var Huisletteringe $aoahuisletter
     */
    protected $aoahuisletter = null;

    /**
     * @var Huisnummertoevoeginge $aoahuisnummertoevoeging
     */
    protected $aoahuisnummertoevoeging = null;

    /**
     * @var LocatieOmschrijvinge $locatieOmschrijving
     */
    protected $locatieOmschrijving = null;

    /**
     * @var DatumMetIndicator $begindatumAanduiding
     */
    protected $begindatumAanduiding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ObjectNummeringe
     */
    public function getAoaidentificatie()
    {
      return $this->aoaidentificatie;
    }

    /**
     * @param ObjectNummeringe $aoaidentificatie
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoaidentificatie($aoaidentificatie)
    {
      $this->aoaidentificatie = $aoaidentificatie;
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
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingAdrWOZe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingAdrWOZe $typering
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return WoonplaatsNaame
     */
    public function getWplwoonplaatsNaam()
    {
      return $this->wplwoonplaatsNaam;
    }

    /**
     * @param WoonplaatsNaame $wplwoonplaatsNaam
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
      return $this;
    }

    /**
     * @return WoonplaatsWaarinGelegenGrp
     */
    public function getAoawoonplaatsWaarinGelegen()
    {
      return $this->aoawoonplaatsWaarinGelegen;
    }

    /**
     * @param WoonplaatsWaarinGelegenGrp $aoawoonplaatsWaarinGelegen
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoawoonplaatsWaarinGelegen($aoawoonplaatsWaarinGelegen)
    {
      $this->aoawoonplaatsWaarinGelegen = $aoawoonplaatsWaarinGelegen;
      return $this;
    }

    /**
     * @return Postcodee
     */
    public function getAoapostcode()
    {
      return $this->aoapostcode;
    }

    /**
     * @param Postcodee $aoapostcode
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoapostcode($aoapostcode)
    {
      $this->aoapostcode = $aoapostcode;
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
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setGoropenbareRuimteNaam($goropenbareRuimteNaam)
    {
      $this->goropenbareRuimteNaam = $goropenbareRuimteNaam;
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
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setGorstraatnaam($gorstraatnaam)
    {
      $this->gorstraatnaam = $gorstraatnaam;
      return $this;
    }

    /**
     * @return Huisnummeringe
     */
    public function getAoahuisnummer()
    {
      return $this->aoahuisnummer;
    }

    /**
     * @param Huisnummeringe $aoahuisnummer
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoahuisnummer($aoahuisnummer)
    {
      $this->aoahuisnummer = $aoahuisnummer;
      return $this;
    }

    /**
     * @return Huisletteringe
     */
    public function getAoahuisletter()
    {
      return $this->aoahuisletter;
    }

    /**
     * @param Huisletteringe $aoahuisletter
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoahuisletter($aoahuisletter)
    {
      $this->aoahuisletter = $aoahuisletter;
      return $this;
    }

    /**
     * @return Huisnummertoevoeginge
     */
    public function getAoahuisnummertoevoeging()
    {
      return $this->aoahuisnummertoevoeging;
    }

    /**
     * @param Huisnummertoevoeginge $aoahuisnummertoevoeging
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setAoahuisnummertoevoeging($aoahuisnummertoevoeging)
    {
      $this->aoahuisnummertoevoeging = $aoahuisnummertoevoeging;
      return $this;
    }

    /**
     * @return LocatieOmschrijvinge
     */
    public function getLocatieOmschrijving()
    {
      return $this->locatieOmschrijving;
    }

    /**
     * @param LocatieOmschrijvinge $locatieOmschrijving
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setLocatieOmschrijving($locatieOmschrijving)
    {
      $this->locatieOmschrijving = $locatieOmschrijving;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getBegindatumAanduiding()
    {
      return $this->begindatumAanduiding;
    }

    /**
     * @param DatumMetIndicator $begindatumAanduiding
     * @return \RRSVP\Stuf\AanduidingWOZobjectGrp-basis
     */
    public function setBegindatumAanduiding($begindatumAanduiding)
    {
      $this->begindatumAanduiding = $begindatumAanduiding;
      return $this;
    }

}
