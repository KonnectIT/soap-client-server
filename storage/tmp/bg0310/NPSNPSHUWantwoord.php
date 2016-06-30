<?php

class NPSNPSHUWantwoord
{

    /**
     * @var NPSgerelateerdeAntwoord $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var SoortVerbintenise $soortVerbintenis
     */
    protected $soortVerbintenis = null;

    /**
     * @var DatumMetIndicator $datumSluiting
     */
    protected $datumSluiting = null;

    /**
     * @var Gemeentenaame $plaatsSluiting
     */
    protected $plaatsSluiting = null;

    /**
     * @var Landcodee $landSluiting
     */
    protected $landSluiting = null;

    /**
     * @var DatumMetIndicator $datumOntbinding
     */
    protected $datumOntbinding = null;

    /**
     * @var Gemeentenaame $plaatsOntbinding
     */
    protected $plaatsOntbinding = null;

    /**
     * @var Landcodee $landOntbinding
     */
    protected $landOntbinding = null;

    /**
     * @var RedenOntbindinge $redenOntbinding
     */
    protected $redenOntbinding = null;

    /**
     * @var InOnderzoekNPSNPSHUW[] $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidNPSNPSHUW[] $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNPSNPSHUW $brondocument
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
     * @var NPSNPSHUW-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var NPSNPSHUW-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var NPSNPSHUWhistorieFormeelRelatie $historieFormeelRelatie
     */
    protected $historieFormeelRelatie = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

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
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return NPSgerelateerdeAntwoord
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NPSgerelateerdeAntwoord $gerelateerde
     * @return NPSNPSHUW-antwoord
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return SoortVerbintenise
     */
    public function getSoortVerbintenis()
    {
      return $this->soortVerbintenis;
    }

    /**
     * @param SoortVerbintenise $soortVerbintenis
     * @return NPSNPSHUW-antwoord
     */
    public function setSoortVerbintenis($soortVerbintenis)
    {
      $this->soortVerbintenis = $soortVerbintenis;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumSluiting()
    {
      return $this->datumSluiting;
    }

    /**
     * @param DatumMetIndicator $datumSluiting
     * @return NPSNPSHUW-antwoord
     */
    public function setDatumSluiting($datumSluiting)
    {
      $this->datumSluiting = $datumSluiting;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getPlaatsSluiting()
    {
      return $this->plaatsSluiting;
    }

    /**
     * @param Gemeentenaame $plaatsSluiting
     * @return NPSNPSHUW-antwoord
     */
    public function setPlaatsSluiting($plaatsSluiting)
    {
      $this->plaatsSluiting = $plaatsSluiting;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getLandSluiting()
    {
      return $this->landSluiting;
    }

    /**
     * @param Landcodee $landSluiting
     * @return NPSNPSHUW-antwoord
     */
    public function setLandSluiting($landSluiting)
    {
      $this->landSluiting = $landSluiting;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumOntbinding()
    {
      return $this->datumOntbinding;
    }

    /**
     * @param DatumMetIndicator $datumOntbinding
     * @return NPSNPSHUW-antwoord
     */
    public function setDatumOntbinding($datumOntbinding)
    {
      $this->datumOntbinding = $datumOntbinding;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getPlaatsOntbinding()
    {
      return $this->plaatsOntbinding;
    }

    /**
     * @param Gemeentenaame $plaatsOntbinding
     * @return NPSNPSHUW-antwoord
     */
    public function setPlaatsOntbinding($plaatsOntbinding)
    {
      $this->plaatsOntbinding = $plaatsOntbinding;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getLandOntbinding()
    {
      return $this->landOntbinding;
    }

    /**
     * @param Landcodee $landOntbinding
     * @return NPSNPSHUW-antwoord
     */
    public function setLandOntbinding($landOntbinding)
    {
      $this->landOntbinding = $landOntbinding;
      return $this;
    }

    /**
     * @return RedenOntbindinge
     */
    public function getRedenOntbinding()
    {
      return $this->redenOntbinding;
    }

    /**
     * @param RedenOntbindinge $redenOntbinding
     * @return NPSNPSHUW-antwoord
     */
    public function setRedenOntbinding($redenOntbinding)
    {
      $this->redenOntbinding = $redenOntbinding;
      return $this;
    }

    /**
     * @return InOnderzoekNPSNPSHUW[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNPSNPSHUW[] $inOnderzoek
     * @return NPSNPSHUW-antwoord
     */
    public function setInOnderzoek(array $inOnderzoek = null)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheidNPSNPSHUW[]
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheidNPSNPSHUW[] $aanduidingStrijdigheidNietigheid
     * @return NPSNPSHUW-antwoord
     */
    public function setAanduidingStrijdigheidNietigheid(array $aanduidingStrijdigheidNietigheid = null)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNPSNPSHUW
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNPSNPSHUW $brondocument
     * @return NPSNPSHUW-antwoord
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
     * @return NPSNPSHUW-antwoord
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
     * @return NPSNPSHUW-antwoord
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
     * @return NPSNPSHUW-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPSNPSHUW-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param NPSNPSHUW-historieMaterieel[] $historieMaterieel
     * @return NPSNPSHUW-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return NPSNPSHUW-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NPSNPSHUW-historieFormeel[] $historieFormeel
     * @return NPSNPSHUW-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return NPSNPSHUWhistorieFormeelRelatie
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param NPSNPSHUWhistorieFormeelRelatie $historieFormeelRelatie
     * @return NPSNPSHUW-antwoord
     */
    public function setHistorieFormeelRelatie($historieFormeelRelatie)
    {
      $this->historieFormeelRelatie = $historieFormeelRelatie;
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
     * @return NPSNPSHUW-antwoord
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return NPSNPSHUW-antwoord
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
     * @return NPSNPSHUW-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
