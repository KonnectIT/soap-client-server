<?php

namespace RRSVP\Stuf;

class AdrGrpantwoord
{

    /**
     * @var ObjectNummeringe $numidentificatie
     */
    protected $numidentificatie = null;

    /**
     * @var ObjectNummeringe $oaoidentificatie
     */
    protected $oaoidentificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingAdrTGOe $typering
     */
    protected $typering = null;

    /**
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    /**
     * @var WoonplaatsNaame $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var WoonplaatsWaarinGelegenGrp $aoawoonplaatsWaarinGelegen
     */
    protected $aoawoonplaatsWaarinGelegen = null;

    /**
     * @var ObjectNummeringe $goridentificatie
     */
    protected $goridentificatie = null;

    /**
     * @var ObjectNummeringe $opridentificatie
     */
    protected $opridentificatie = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

    /**
     * @var Straatnaame $gorstraatnaam
     */
    protected $gorstraatnaam = null;

    /**
     * @var Postcodee $aoapostcode
     */
    protected $aoapostcode = null;

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
     * @var LocatieOmschrijvinge $ogolocatieAanduiding
     */
    protected $ogolocatieAanduiding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ObjectNummeringe
     */
    public function getNumidentificatie()
    {
      return $this->numidentificatie;
    }

    /**
     * @param ObjectNummeringe $numidentificatie
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setNumidentificatie($numidentificatie)
    {
      $this->numidentificatie = $numidentificatie;
      return $this;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getOaoidentificatie()
    {
      return $this->oaoidentificatie;
    }

    /**
     * @param ObjectNummeringe $oaoidentificatie
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setOaoidentificatie($oaoidentificatie)
    {
      $this->oaoidentificatie = $oaoidentificatie;
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingAdrTGOe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingAdrTGOe $typering
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return WoonplaatsCoderinge
     */
    public function getWplidentificatie()
    {
      return $this->wplidentificatie;
    }

    /**
     * @param WoonplaatsCoderinge $wplidentificatie
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setAoawoonplaatsWaarinGelegen($aoawoonplaatsWaarinGelegen)
    {
      $this->aoawoonplaatsWaarinGelegen = $aoawoonplaatsWaarinGelegen;
      return $this;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getGoridentificatie()
    {
      return $this->goridentificatie;
    }

    /**
     * @param ObjectNummeringe $goridentificatie
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setGoridentificatie($goridentificatie)
    {
      $this->goridentificatie = $goridentificatie;
      return $this;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getOpridentificatie()
    {
      return $this->opridentificatie;
    }

    /**
     * @param ObjectNummeringe $opridentificatie
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setOpridentificatie($opridentificatie)
    {
      $this->opridentificatie = $opridentificatie;
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setGorstraatnaam($gorstraatnaam)
    {
      $this->gorstraatnaam = $gorstraatnaam;
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setAoapostcode($aoapostcode)
    {
      $this->aoapostcode = $aoapostcode;
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
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
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setAoahuisnummertoevoeging($aoahuisnummertoevoeging)
    {
      $this->aoahuisnummertoevoeging = $aoahuisnummertoevoeging;
      return $this;
    }

    /**
     * @return LocatieOmschrijvinge
     */
    public function getOgolocatieAanduiding()
    {
      return $this->ogolocatieAanduiding;
    }

    /**
     * @param LocatieOmschrijvinge $ogolocatieAanduiding
     * @return \RRSVP\Stuf\AdrGrp-antwoord
     */
    public function setOgolocatieAanduiding($ogolocatieAanduiding)
    {
      $this->ogolocatieAanduiding = $ogolocatieAanduiding;
      return $this;
    }

}
