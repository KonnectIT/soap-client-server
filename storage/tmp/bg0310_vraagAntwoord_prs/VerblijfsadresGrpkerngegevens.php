<?php

namespace RRSVP\Stuf;

class VerblijfsadresGrpkerngegevens
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
     * @var WoonplaatsNaame $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
     */
    public function setGoropenbareRuimteNaam($goropenbareRuimteNaam)
    {
      $this->goropenbareRuimteNaam = $goropenbareRuimteNaam;
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\VerblijfsadresGrp-kerngegevens
     */
    public function setInplocatiebeschrijving($inplocatiebeschrijving)
    {
      $this->inplocatiebeschrijving = $inplocatiebeschrijving;
      return $this;
    }

}
