<?php

class OPRvraag
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
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    /**
     * @var WoonplaatsNaame $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var ObjectNummeringe $goridentificatie
     */
    protected $goridentificatie = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

    /**
     * @var Straatnaame $gorstraatnaam
     */
    protected $gorstraatnaam = null;

    /**
     * @var Huisnummerrangee $huisnummerrangeOneven
     */
    protected $huisnummerrangeOneven = null;

    /**
     * @var Huisnummerrangee $huisnummerrangeEven
     */
    protected $huisnummerrangeEven = null;

    /**
     * @var Huisnummerrangee $huisnummerrangeEvenOneven
     */
    protected $huisnummerrangeEvenOneven = null;

    /**
     * @var Indicatiee $gorgeconstateerd
     */
    protected $gorgeconstateerd = null;

    /**
     * @var TyperingOPRe $gortype
     */
    protected $gortype = null;

    /**
     * @var StatusNaamgevinge $gorstatus
     */
    protected $gorstatus = null;

    /**
     * @var InOnderzoekOPRvraag $inOnderzoek
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
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
     * @return OPR-vraag
     */
    public function setGoridentificatie($goridentificatie)
    {
      $this->goridentificatie = $goridentificatie;
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
     * @return OPR-vraag
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
     * @return OPR-vraag
     */
    public function setGorstraatnaam($gorstraatnaam)
    {
      $this->gorstraatnaam = $gorstraatnaam;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getHuisnummerrangeOneven()
    {
      return $this->huisnummerrangeOneven;
    }

    /**
     * @param Huisnummerrangee $huisnummerrangeOneven
     * @return OPR-vraag
     */
    public function setHuisnummerrangeOneven($huisnummerrangeOneven)
    {
      $this->huisnummerrangeOneven = $huisnummerrangeOneven;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getHuisnummerrangeEven()
    {
      return $this->huisnummerrangeEven;
    }

    /**
     * @param Huisnummerrangee $huisnummerrangeEven
     * @return OPR-vraag
     */
    public function setHuisnummerrangeEven($huisnummerrangeEven)
    {
      $this->huisnummerrangeEven = $huisnummerrangeEven;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getHuisnummerrangeEvenOneven()
    {
      return $this->huisnummerrangeEvenOneven;
    }

    /**
     * @param Huisnummerrangee $huisnummerrangeEvenOneven
     * @return OPR-vraag
     */
    public function setHuisnummerrangeEvenOneven($huisnummerrangeEvenOneven)
    {
      $this->huisnummerrangeEvenOneven = $huisnummerrangeEvenOneven;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getGorgeconstateerd()
    {
      return $this->gorgeconstateerd;
    }

    /**
     * @param Indicatiee $gorgeconstateerd
     * @return OPR-vraag
     */
    public function setGorgeconstateerd($gorgeconstateerd)
    {
      $this->gorgeconstateerd = $gorgeconstateerd;
      return $this;
    }

    /**
     * @return TyperingOPRe
     */
    public function getGortype()
    {
      return $this->gortype;
    }

    /**
     * @param TyperingOPRe $gortype
     * @return OPR-vraag
     */
    public function setGortype($gortype)
    {
      $this->gortype = $gortype;
      return $this;
    }

    /**
     * @return StatusNaamgevinge
     */
    public function getGorstatus()
    {
      return $this->gorstatus;
    }

    /**
     * @param StatusNaamgevinge $gorstatus
     * @return OPR-vraag
     */
    public function setGorstatus($gorstatus)
    {
      $this->gorstatus = $gorstatus;
      return $this;
    }

    /**
     * @return InOnderzoekOPRvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekOPRvraag $inOnderzoek
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
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
     * @return OPR-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
