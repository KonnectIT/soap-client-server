<?php

class NPSNPSHUWhistorieFormeelRelatie
{

    /**
     * @var NPSkerngegevens $gerelateerde
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
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @var AardAantal $aardAantal
     */
    protected $aardAantal = null;

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
     * @param AantalVoorkomens $aantalVoorkomens
     * @param AardAantal $aardAantal
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $noValue, $scope, $verwerkingssoort, $aantalVoorkomens, $aardAantal)
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
      $this->aantalVoorkomens = $aantalVoorkomens;
      $this->aardAantal = $aardAantal;
    }

    /**
     * @return NPSkerngegevens
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NPSkerngegevens $gerelateerde
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
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
     * @return NPSNPSHUW-historieFormeelRelatie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

    /**
     * @return AantalVoorkomens
     */
    public function getAantalVoorkomens()
    {
      return $this->aantalVoorkomens;
    }

    /**
     * @param AantalVoorkomens $aantalVoorkomens
     * @return NPSNPSHUW-historieFormeelRelatie
     */
    public function setAantalVoorkomens($aantalVoorkomens)
    {
      $this->aantalVoorkomens = $aantalVoorkomens;
      return $this;
    }

    /**
     * @return AardAantal
     */
    public function getAardAantal()
    {
      return $this->aardAantal;
    }

    /**
     * @param AardAantal $aardAantal
     * @return NPSNPSHUW-historieFormeelRelatie
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
