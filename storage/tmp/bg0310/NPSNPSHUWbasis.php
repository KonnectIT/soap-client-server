<?php

class NPSNPSHUWbasis
{

    /**
     * @var NPSNININGbasis $gerelateerde
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
     * @var InOnderzoekNPSNPSHUW-basis[] $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheid[] $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var Brondocument $brondocument
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
     * @var NPSNPSHUW-basis[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var NPSNPSHUW-basis[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var NPSNPSHUWbasis $historieFormeelRelatie
     */
    protected $historieFormeelRelatie = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @var AardAantal $aardAantal
     */
    protected $aardAantal = null;

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
     * @var Sleutel $sleutelSynchronisatie
     */
    protected $sleutelSynchronisatie = null;

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
     * @param AantalVoorkomens $aantalVoorkomens
     * @param AardAantal $aardAantal
     * @param Sleutel $sleutelVerzendend
     * @param Sleutel $sleutelOntvangend
     * @param Sleutel $sleutelGegevensbeheer
     * @param Sleutel $sleutelSynchronisatie
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $aantalVoorkomens, $aardAantal, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $sleutelSynchronisatie, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->aantalVoorkomens = $aantalVoorkomens;
      $this->aardAantal = $aardAantal;
      $this->sleutelVerzendend = $sleutelVerzendend;
      $this->sleutelOntvangend = $sleutelOntvangend;
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return NPSNININGbasis
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NPSNININGbasis $gerelateerde
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setRedenOntbinding($redenOntbinding)
    {
      $this->redenOntbinding = $redenOntbinding;
      return $this;
    }

    /**
     * @return InOnderzoekNPSNPSHUW-basis[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNPSNPSHUW-basis[] $inOnderzoek
     * @return NPSNPSHUW-basis
     */
    public function setInOnderzoek(array $inOnderzoek = null)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheid[]
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheid[] $aanduidingStrijdigheidNietigheid
     * @return NPSNPSHUW-basis
     */
    public function setAanduidingStrijdigheidNietigheid(array $aanduidingStrijdigheidNietigheid = null)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return Brondocument
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param Brondocument $brondocument
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPSNPSHUW-basis[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param NPSNPSHUW-basis[] $historieMaterieel
     * @return NPSNPSHUW-basis
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return NPSNPSHUW-basis[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NPSNPSHUW-basis[] $historieFormeel
     * @return NPSNPSHUW-basis
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return NPSNPSHUWbasis
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param NPSNPSHUWbasis $historieFormeelRelatie
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setSleutelGegevensbeheer($sleutelGegevensbeheer)
    {
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelSynchronisatie()
    {
      return $this->sleutelSynchronisatie;
    }

    /**
     * @param Sleutel $sleutelSynchronisatie
     * @return NPSNPSHUW-basis
     */
    public function setSleutelSynchronisatie($sleutelSynchronisatie)
    {
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
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
     * @return NPSNPSHUW-basis
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
