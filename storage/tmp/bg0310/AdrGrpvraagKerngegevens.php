<?php

class AdrGrpvraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
     */
    public function setOaoidentificatie($oaoidentificatie)
    {
      $this->oaoidentificatie = $oaoidentificatie;
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
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
     * @return AdrGrp-vraagKerngegevens
     */
    public function setOgolocatieAanduiding($ogolocatieAanduiding)
    {
      $this->ogolocatieAanduiding = $ogolocatieAanduiding;
      return $this;
    }

}
