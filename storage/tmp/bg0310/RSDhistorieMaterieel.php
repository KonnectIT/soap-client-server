<?php

class RSDhistorieMaterieel
{

    /**
     * @var ReisdocumentSoortCodee $rdscode
     */
    protected $rdscode = null;

    /**
     * @var Reisdocumentnummere $nummer
     */
    protected $nummer = null;

    /**
     * @var ReisdocumentAutoriteite $autoriteitUitgifte
     */
    protected $autoriteitUitgifte = null;

    /**
     * @var DatumMetIndicator $einddatumGeldigheid
     */
    protected $einddatumGeldigheid = null;

    /**
     * @var AanduidingInhoudingVermissinge $aanduidingInhoudingVermissing
     */
    protected $aanduidingInhoudingVermissing = null;

    /**
     * @var ReisdocumentLengteHoudere $lengteHouder
     */
    protected $lengteHouder = null;

    /**
     * @var StatusMetagegevenNoValue $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentRSD $brondocument
     */
    protected $brondocument = null;

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
     * @var RSD-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var Sleutel $sleutelVerzendend
     */
    protected $sleutelVerzendend = null;

    /**
     * @var Sleutel $sleutelOntvangend
     */
    protected $sleutelOntvangend = null;

    /**
     * @var Sleutel $sleutelGegevensbeheer
     */
    protected $sleutelGegevensbeheer = null;

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
     * @param Sleutel $sleutelVerzendend
     * @param Sleutel $sleutelOntvangend
     * @param Sleutel $sleutelGegevensbeheer
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->sleutelVerzendend = $sleutelVerzendend;
      $this->sleutelOntvangend = $sleutelOntvangend;
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return ReisdocumentSoortCodee
     */
    public function getRdscode()
    {
      return $this->rdscode;
    }

    /**
     * @param ReisdocumentSoortCodee $rdscode
     * @return RSD-historieMaterieel
     */
    public function setRdscode($rdscode)
    {
      $this->rdscode = $rdscode;
      return $this;
    }

    /**
     * @return Reisdocumentnummere
     */
    public function getNummer()
    {
      return $this->nummer;
    }

    /**
     * @param Reisdocumentnummere $nummer
     * @return RSD-historieMaterieel
     */
    public function setNummer($nummer)
    {
      $this->nummer = $nummer;
      return $this;
    }

    /**
     * @return ReisdocumentAutoriteite
     */
    public function getAutoriteitUitgifte()
    {
      return $this->autoriteitUitgifte;
    }

    /**
     * @param ReisdocumentAutoriteite $autoriteitUitgifte
     * @return RSD-historieMaterieel
     */
    public function setAutoriteitUitgifte($autoriteitUitgifte)
    {
      $this->autoriteitUitgifte = $autoriteitUitgifte;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEinddatumGeldigheid()
    {
      return $this->einddatumGeldigheid;
    }

    /**
     * @param DatumMetIndicator $einddatumGeldigheid
     * @return RSD-historieMaterieel
     */
    public function setEinddatumGeldigheid($einddatumGeldigheid)
    {
      $this->einddatumGeldigheid = $einddatumGeldigheid;
      return $this;
    }

    /**
     * @return AanduidingInhoudingVermissinge
     */
    public function getAanduidingInhoudingVermissing()
    {
      return $this->aanduidingInhoudingVermissing;
    }

    /**
     * @param AanduidingInhoudingVermissinge $aanduidingInhoudingVermissing
     * @return RSD-historieMaterieel
     */
    public function setAanduidingInhoudingVermissing($aanduidingInhoudingVermissing)
    {
      $this->aanduidingInhoudingVermissing = $aanduidingInhoudingVermissing;
      return $this;
    }

    /**
     * @return ReisdocumentLengteHoudere
     */
    public function getLengteHouder()
    {
      return $this->lengteHouder;
    }

    /**
     * @param ReisdocumentLengteHoudere $lengteHouder
     * @return RSD-historieMaterieel
     */
    public function setLengteHouder($lengteHouder)
    {
      $this->lengteHouder = $lengteHouder;
      return $this;
    }

    /**
     * @return StatusMetagegevenNoValue
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param StatusMetagegevenNoValue $inOnderzoek
     * @return RSD-historieMaterieel
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentRSD
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentRSD $brondocument
     * @return RSD-historieMaterieel
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
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
     * @return RSD-historieMaterieel
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
     * @return RSD-historieMaterieel
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
     * @return RSD-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return RSD-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param RSD-historieFormeel[] $historieFormeel
     * @return RSD-historieMaterieel
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
     * @return RSD-historieMaterieel
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelVerzendend()
    {
      return $this->sleutelVerzendend;
    }

    /**
     * @param Sleutel $sleutelVerzendend
     * @return RSD-historieMaterieel
     */
    public function setSleutelVerzendend($sleutelVerzendend)
    {
      $this->sleutelVerzendend = $sleutelVerzendend;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelOntvangend()
    {
      return $this->sleutelOntvangend;
    }

    /**
     * @param Sleutel $sleutelOntvangend
     * @return RSD-historieMaterieel
     */
    public function setSleutelOntvangend($sleutelOntvangend)
    {
      $this->sleutelOntvangend = $sleutelOntvangend;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelGegevensbeheer()
    {
      return $this->sleutelGegevensbeheer;
    }

    /**
     * @param Sleutel $sleutelGegevensbeheer
     * @return RSD-historieMaterieel
     */
    public function setSleutelGegevensbeheer($sleutelGegevensbeheer)
    {
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
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
     * @return RSD-historieMaterieel
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
     * @return RSD-historieMaterieel
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
     * @return RSD-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
