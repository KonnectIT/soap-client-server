<?php

class RSDgerelateerdeBIJVraag
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
     * @var RSDNPSHDRkerngegevens $isVan
     */
    protected $isVan = null;

    /**
     * @var DatumMetIndicator $datumUitgifte
     */
    protected $datumUitgifte = null;

    /**
     * @var ReisdocumentAutoriteite $autoriteitUitgifte
     */
    protected $autoriteitUitgifte = null;

    /**
     * @var DatumMetIndicator $einddatumGeldigheid
     */
    protected $einddatumGeldigheid = null;

    /**
     * @var DatumMetIndicator $datumInhoudingVermissing
     */
    protected $datumInhoudingVermissing = null;

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
     * @var RSDNPSBIJkerngegevens $heeftEropBijgeschreven
     */
    protected $heeftEropBijgeschreven = null;

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
     * @return ReisdocumentSoortCodee
     */
    public function getRdscode()
    {
      return $this->rdscode;
    }

    /**
     * @param ReisdocumentSoortCodee $rdscode
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setNummer($nummer)
    {
      $this->nummer = $nummer;
      return $this;
    }

    /**
     * @return RSDNPSHDRkerngegevens
     */
    public function getIsVan()
    {
      return $this->isVan;
    }

    /**
     * @param RSDNPSHDRkerngegevens $isVan
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setIsVan($isVan)
    {
      $this->isVan = $isVan;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumUitgifte()
    {
      return $this->datumUitgifte;
    }

    /**
     * @param DatumMetIndicator $datumUitgifte
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setDatumUitgifte($datumUitgifte)
    {
      $this->datumUitgifte = $datumUitgifte;
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setEinddatumGeldigheid($einddatumGeldigheid)
    {
      $this->einddatumGeldigheid = $einddatumGeldigheid;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumInhoudingVermissing()
    {
      return $this->datumInhoudingVermissing;
    }

    /**
     * @param DatumMetIndicator $datumInhoudingVermissing
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setDatumInhoudingVermissing($datumInhoudingVermissing)
    {
      $this->datumInhoudingVermissing = $datumInhoudingVermissing;
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return RSDNPSBIJkerngegevens
     */
    public function getHeeftEropBijgeschreven()
    {
      return $this->heeftEropBijgeschreven;
    }

    /**
     * @param RSDNPSBIJkerngegevens $heeftEropBijgeschreven
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setHeeftEropBijgeschreven($heeftEropBijgeschreven)
    {
      $this->heeftEropBijgeschreven = $heeftEropBijgeschreven;
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
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
     * @return RSD-gerelateerdeBIJVraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
