<?php

class WPLvraag
{

    /**
     * @var WoonplaatsCoderinge $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var NaamgevingObjecte $woonplaatsNaam
     */
    protected $woonplaatsNaam = null;

    /**
     * @var WoonplaatsNaamNene $woonplaatsNaamNen
     */
    protected $woonplaatsNaamNen = null;

    /**
     * @var Gemeentecoderinge $gemgemeenteCode
     */
    protected $gemgemeenteCode = null;

    /**
     * @var Gemeentenaame $gemgemeenteNaam
     */
    protected $gemgemeenteNaam = null;

    /**
     * @var GeometrieVlake $geometrie
     */
    protected $geometrie = null;

    /**
     * @var StatusWoonplaatse $status
     */
    protected $status = null;

    /**
     * @var Indicatiee $geconstateerd
     */
    protected $geconstateerd = null;

    /**
     * @var InOnderzoekWPLvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBAGvraag $brondocument
     */
    protected $brondocument = null;

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
     * @return WoonplaatsCoderinge
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param WoonplaatsCoderinge $identificatie
     * @return WPL-vraag
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
     * @return WPL-vraag
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getWoonplaatsNaam()
    {
      return $this->woonplaatsNaam;
    }

    /**
     * @param NaamgevingObjecte $woonplaatsNaam
     * @return WPL-vraag
     */
    public function setWoonplaatsNaam($woonplaatsNaam)
    {
      $this->woonplaatsNaam = $woonplaatsNaam;
      return $this;
    }

    /**
     * @return WoonplaatsNaamNene
     */
    public function getWoonplaatsNaamNen()
    {
      return $this->woonplaatsNaamNen;
    }

    /**
     * @param WoonplaatsNaamNene $woonplaatsNaamNen
     * @return WPL-vraag
     */
    public function setWoonplaatsNaamNen($woonplaatsNaamNen)
    {
      $this->woonplaatsNaamNen = $woonplaatsNaamNen;
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
     * @return WPL-vraag
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
     * @return WPL-vraag
     */
    public function setGemgemeenteNaam($gemgemeenteNaam)
    {
      $this->gemgemeenteNaam = $gemgemeenteNaam;
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
     * @return WPL-vraag
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return StatusWoonplaatse
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StatusWoonplaatse $status
     * @return WPL-vraag
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return WPL-vraag
     */
    public function setGeconstateerd($geconstateerd)
    {
      $this->geconstateerd = $geconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekWPLvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekWPLvraag $inOnderzoek
     * @return WPL-vraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBAGvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBAGvraag $brondocument
     * @return WPL-vraag
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
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
     * @return WPL-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
