<?php

class GEMantwoord
{

    /**
     * @var Gemeentecoderinge $gemeenteCode
     */
    protected $gemeenteCode = null;

    /**
     * @var Gemeentenaame $gemeenteNaam
     */
    protected $gemeenteNaam = null;

    /**
     * @var GemeentenaamNene $gemeenteNaamNen
     */
    protected $gemeenteNaamNen = null;

    /**
     * @var GeometrieVlake $geometrie
     */
    protected $geometrie = null;

    /**
     * @var Gemeentecoderinge $gemeenteWaarinOvergegaan
     */
    protected $gemeenteWaarinOvergegaan = null;

    /**
     * @var InOnderzoekGEM $inOnderzoek
     */
    protected $inOnderzoek = null;

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
     * @var GEM-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var GEM-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var anonymous82 $scope
     */
    protected $scope = null;

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
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getGemeenteCode()
    {
      return $this->gemeenteCode;
    }

    /**
     * @param Gemeentecoderinge $gemeenteCode
     * @return GEM-antwoord
     */
    public function setGemeenteCode($gemeenteCode)
    {
      $this->gemeenteCode = $gemeenteCode;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getGemeenteNaam()
    {
      return $this->gemeenteNaam;
    }

    /**
     * @param Gemeentenaame $gemeenteNaam
     * @return GEM-antwoord
     */
    public function setGemeenteNaam($gemeenteNaam)
    {
      $this->gemeenteNaam = $gemeenteNaam;
      return $this;
    }

    /**
     * @return GemeentenaamNene
     */
    public function getGemeenteNaamNen()
    {
      return $this->gemeenteNaamNen;
    }

    /**
     * @param GemeentenaamNene $gemeenteNaamNen
     * @return GEM-antwoord
     */
    public function setGemeenteNaamNen($gemeenteNaamNen)
    {
      $this->gemeenteNaamNen = $gemeenteNaamNen;
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
     * @return GEM-antwoord
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getGemeenteWaarinOvergegaan()
    {
      return $this->gemeenteWaarinOvergegaan;
    }

    /**
     * @param Gemeentecoderinge $gemeenteWaarinOvergegaan
     * @return GEM-antwoord
     */
    public function setGemeenteWaarinOvergegaan($gemeenteWaarinOvergegaan)
    {
      $this->gemeenteWaarinOvergegaan = $gemeenteWaarinOvergegaan;
      return $this;
    }

    /**
     * @return InOnderzoekGEM
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekGEM $inOnderzoek
     * @return GEM-antwoord
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return GEM-antwoord
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
     * @return GEM-antwoord
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
     * @return GEM-antwoord
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
     * @return GEM-antwoord
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
     * @return GEM-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return GEM-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param GEM-historieMaterieel[] $historieMaterieel
     * @return GEM-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return GEM-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param GEM-historieFormeel[] $historieFormeel
     * @return GEM-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
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
     * @return GEM-antwoord
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
     * @return GEM-antwoord
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return anonymous82
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param anonymous82 $scope
     * @return GEM-antwoord
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
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
     * @return GEM-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
