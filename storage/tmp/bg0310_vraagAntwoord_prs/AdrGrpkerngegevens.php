<?php

namespace RRSVP\Stuf;

class AdrGrpkerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
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
     * @return \RRSVP\Stuf\AdrGrp-kerngegevens
     */
    public function setOgolocatieAanduiding($ogolocatieAanduiding)
    {
      $this->ogolocatieAanduiding = $ogolocatieAanduiding;
      return $this;
    }

}
