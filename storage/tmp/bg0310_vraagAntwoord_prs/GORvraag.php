<?php

namespace RRSVP\Stuf;

class GORvraag
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
     * @var Gemeentecoderinge $gemgemeenteCode
     */
    protected $gemgemeenteCode = null;

    /**
     * @var Gemeentenaame $gemgemeenteNaam
     */
    protected $gemgemeenteNaam = null;

    /**
     * @var NaamgevingObjecte $openbareRuimteNaam
     */
    protected $openbareRuimteNaam = null;

    /**
     * @var Straatnaame $straatnaam
     */
    protected $straatnaam = null;

    /**
     * @var InliggendeOPR $inliggendeOPR
     */
    protected $inliggendeOPR = null;

    /**
     * @var GeometrieVlake $geometrie
     */
    protected $geometrie = null;

    /**
     * @var Indicatiee $geconstateerd
     */
    protected $geconstateerd = null;

    /**
     * @var TyperingOPRe $type
     */
    protected $type = null;

    /**
     * @var StatusNaamgevinge $status
     */
    protected $status = null;

    /**
     * @var InOnderzoekGORvraag $inOnderzoek
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getGemgemeenteCode()
    {
      return $this->gemgemeenteCode;
    }

    /**
     * @param Gemeentecoderinge $gemgemeenteCode
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setGemgemeenteCode($gemgemeenteCode)
    {
      $this->gemgemeenteCode = $gemgemeenteCode;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getGemgemeenteNaam()
    {
      return $this->gemgemeenteNaam;
    }

    /**
     * @param Gemeentenaame $gemgemeenteNaam
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setGemgemeenteNaam($gemgemeenteNaam)
    {
      $this->gemgemeenteNaam = $gemgemeenteNaam;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getOpenbareRuimteNaam()
    {
      return $this->openbareRuimteNaam;
    }

    /**
     * @param NaamgevingObjecte $openbareRuimteNaam
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setOpenbareRuimteNaam($openbareRuimteNaam)
    {
      $this->openbareRuimteNaam = $openbareRuimteNaam;
      return $this;
    }

    /**
     * @return Straatnaame
     */
    public function getStraatnaam()
    {
      return $this->straatnaam;
    }

    /**
     * @param Straatnaame $straatnaam
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setStraatnaam($straatnaam)
    {
      $this->straatnaam = $straatnaam;
      return $this;
    }

    /**
     * @return InliggendeOPR
     */
    public function getInliggendeOPR()
    {
      return $this->inliggendeOPR;
    }

    /**
     * @param InliggendeOPR $inliggendeOPR
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setInliggendeOPR($inliggendeOPR)
    {
      $this->inliggendeOPR = $inliggendeOPR;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getGeometrie()
    {
      return $this->geometrie;
    }

    /**
     * @param GeometrieVlake $geometrie
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getGeconstateerd()
    {
      return $this->geconstateerd;
    }

    /**
     * @param Indicatiee $geconstateerd
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setGeconstateerd($geconstateerd)
    {
      $this->geconstateerd = $geconstateerd;
      return $this;
    }

    /**
     * @return TyperingOPRe
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TyperingOPRe $type
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return StatusNaamgevinge
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StatusNaamgevinge $status
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return InOnderzoekGORvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekGORvraag $inOnderzoek
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
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
     * @return \RRSVP\Stuf\GOR-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
