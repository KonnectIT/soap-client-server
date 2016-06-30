<?php

class CorrespondentieAdresGrpvraagScope
{

    /**
     * @var TyperingCorAdre $typering
     */
    protected $typering = null;

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var WoonplaatsWaarinGelegenGrp $aoawoonplaatsWaarinGelegen
     */
    protected $aoawoonplaatsWaarinGelegen = null;

    /**
     * @var Postcodee $postcode
     */
    protected $postcode = null;

    /**
     * @var ObjectNummeringe $aoaidentificatie
     */
    protected $aoaidentificatie = null;

    /**
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

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
     * @return TyperingCorAdre
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingCorAdre $typering
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
     */
    public function setAoawoonplaatsWaarinGelegen($aoawoonplaatsWaarinGelegen)
    {
      $this->aoawoonplaatsWaarinGelegen = $aoawoonplaatsWaarinGelegen;
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
     */
    public function setAoaidentificatie($aoaidentificatie)
    {
      $this->aoaidentificatie = $aoaidentificatie;
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
     * @return CorrespondentieAdresGrp-vraagScope
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
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
     * @return CorrespondentieAdresGrp-vraagScope
     */
    public function setSubpostadresNummer($subpostadresNummer)
    {
      $this->subpostadresNummer = $subpostadresNummer;
      return $this;
    }

}
