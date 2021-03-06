<?php

class AOAvraag
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
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var WoonplaatsNaamNene $wplwoonplaatsNaamNen
     */
    protected $wplwoonplaatsNaamNen = null;

    /**
     * @var ObjectNummeringe $opridentificatie
     */
    protected $opridentificatie = null;

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
     * @var Booleane $numindicatieHoofdadres
     */
    protected $numindicatieHoofdadres = null;

    /**
     * @var StatusNaamgevinge $numstatus
     */
    protected $numstatus = null;

    /**
     * @var Indicatiee $numgeconstateerd
     */
    protected $numgeconstateerd = null;

    /**
     * @var InOnderzoekAOAvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBAGvraag $bronDocument
     */
    protected $bronDocument = null;

    /**
     * @var DatumMetIndicator $ingangsdatumObject
     */
    protected $ingangsdatumObject = null;

    /**
     * @var DatumMetIndicator $einddatumObject
     */
    protected $einddatumObject = null;

    /**
     * @var TijdvakGeldigheid $tijdvakGeldigheid
     */
    protected $tijdvakGeldigheid = null;

    /**
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var AOATGOvraag $isVan
     */
    protected $isVan = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
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
     * @return AOA-vraag
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
     * @return AOA-vraag
     */
    public function setWplwoonplaatsNaamNen($wplwoonplaatsNaamNen)
    {
      $this->wplwoonplaatsNaamNen = $wplwoonplaatsNaamNen;
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
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
     * @return AOA-vraag
     */
    public function setWoonplaatsWaarinGelegen($woonplaatsWaarinGelegen)
    {
      $this->woonplaatsWaarinGelegen = $woonplaatsWaarinGelegen;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getNumindicatieHoofdadres()
    {
      return $this->numindicatieHoofdadres;
    }

    /**
     * @param Booleane $numindicatieHoofdadres
     * @return AOA-vraag
     */
    public function setNumindicatieHoofdadres($numindicatieHoofdadres)
    {
      $this->numindicatieHoofdadres = $numindicatieHoofdadres;
      return $this;
    }

    /**
     * @return StatusNaamgevinge
     */
    public function getNumstatus()
    {
      return $this->numstatus;
    }

    /**
     * @param StatusNaamgevinge $numstatus
     * @return AOA-vraag
     */
    public function setNumstatus($numstatus)
    {
      $this->numstatus = $numstatus;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getNumgeconstateerd()
    {
      return $this->numgeconstateerd;
    }

    /**
     * @param Indicatiee $numgeconstateerd
     * @return AOA-vraag
     */
    public function setNumgeconstateerd($numgeconstateerd)
    {
      $this->numgeconstateerd = $numgeconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekAOAvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekAOAvraag $inOnderzoek
     * @return AOA-vraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBAGvraag
     */
    public function getBronDocument()
    {
      return $this->bronDocument;
    }

    /**
     * @param BrondocumentBAGvraag $bronDocument
     * @return AOA-vraag
     */
    public function setBronDocument($bronDocument)
    {
      $this->bronDocument = $bronDocument;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngangsdatumObject()
    {
      return $this->ingangsdatumObject;
    }

    /**
     * @param DatumMetIndicator $ingangsdatumObject
     * @return AOA-vraag
     */
    public function setIngangsdatumObject($ingangsdatumObject)
    {
      $this->ingangsdatumObject = $ingangsdatumObject;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEinddatumObject()
    {
      return $this->einddatumObject;
    }

    /**
     * @param DatumMetIndicator $einddatumObject
     * @return AOA-vraag
     */
    public function setEinddatumObject($einddatumObject)
    {
      $this->einddatumObject = $einddatumObject;
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
     * @return AOA-vraag
     */
    public function setTijdvakGeldigheid($tijdvakGeldigheid)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      return $this;
    }

    /**
     * @return Tijdstipe
     */
    public function getTijdstipRegistratie()
    {
      return $this->tijdstipRegistratie;
    }

    /**
     * @param Tijdstipe $tijdstipRegistratie
     * @return AOA-vraag
     */
    public function setTijdstipRegistratie($tijdstipRegistratie)
    {
      $this->tijdstipRegistratie = $tijdstipRegistratie;
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
     * @return AOA-vraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return AOATGOvraag
     */
    public function getIsVan()
    {
      return $this->isVan;
    }

    /**
     * @param AOATGOvraag $isVan
     * @return AOA-vraag
     */
    public function setIsVan($isVan)
    {
      $this->isVan = $isVan;
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
     * @return AOA-vraag
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
     * @return AOA-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return AOA-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
