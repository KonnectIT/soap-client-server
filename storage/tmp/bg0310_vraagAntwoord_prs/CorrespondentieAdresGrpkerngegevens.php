<?php

namespace RRSVP\Stuf;

class CorrespondentieAdresGrpkerngegevens
{

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var Postcodee $postcode
     */
    protected $postcode = null;

    /**
     * @var ObjectNummeringe $aoaidentificatie
     */
    protected $aoaidentificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

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
     * @var PostadresTypee $subpostadresType
     */
    protected $subpostadresType = null;

    /**
     * @var PostadresNummere $subpostadresNummer
     */
    protected $subpostadresNummer = null;

    
    public function __construct()
    {
    
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setGoropenbareRuimteNaam($goropenbareRuimteNaam)
    {
      $this->goropenbareRuimteNaam = $goropenbareRuimteNaam;
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
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
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setAoahuisnummertoevoeging($aoahuisnummertoevoeging)
    {
      $this->aoahuisnummertoevoeging = $aoahuisnummertoevoeging;
      return $this;
    }

    /**
     * @return PostadresTypee
     */
    public function getSubpostadresType()
    {
      return $this->subpostadresType;
    }

    /**
     * @param PostadresTypee $subpostadresType
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setSubpostadresType($subpostadresType)
    {
      $this->subpostadresType = $subpostadresType;
      return $this;
    }

    /**
     * @return PostadresNummere
     */
    public function getSubpostadresNummer()
    {
      return $this->subpostadresNummer;
    }

    /**
     * @param PostadresNummere $subpostadresNummer
     * @return \RRSVP\Stuf\CorrespondentieAdresGrp-kerngegevens
     */
    public function setSubpostadresNummer($subpostadresNummer)
    {
      $this->subpostadresNummer = $subpostadresNummer;
      return $this;
    }

}
