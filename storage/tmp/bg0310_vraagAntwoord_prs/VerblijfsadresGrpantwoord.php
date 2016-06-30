<?php

namespace RRSVP\Stuf;

class VerblijfsadresGrpantwoord
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
     * @var Locatiebeschrijvinge $inplocatiebeschrijving
     */
    protected $inplocatiebeschrijving = null;

    /**
     * @var DatumMetIndicator $begindatumVerblijf
     */
    protected $begindatumVerblijf = null;

    
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
     */
    public function setAoahuisnummertoevoeging($aoahuisnummertoevoeging)
    {
      $this->aoahuisnummertoevoeging = $aoahuisnummertoevoeging;
      return $this;
    }

    /**
     * @return Locatiebeschrijvinge
     */
    public function getInplocatiebeschrijving()
    {
      return $this->inplocatiebeschrijving;
    }

    /**
     * @param Locatiebeschrijvinge $inplocatiebeschrijving
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
     */
    public function setInplocatiebeschrijving($inplocatiebeschrijving)
    {
      $this->inplocatiebeschrijving = $inplocatiebeschrijving;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getBegindatumVerblijf()
    {
      return $this->begindatumVerblijf;
    }

    /**
     * @param DatumMetIndicator $begindatumVerblijf
     * @return \RRSVP\Stuf\VerblijfsadresGrp-antwoord
     */
    public function setBegindatumVerblijf($begindatumVerblijf)
    {
      $this->begindatumVerblijf = $begindatumVerblijf;
      return $this;
    }

}
