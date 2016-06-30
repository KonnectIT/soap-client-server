<?php

class NPSNPSHUWvraagScope
{

    /**
     * @var NPSgerelateerdeVraagScope $gerelateerde
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
     * @var InOnderzoekNPSNPSHUWvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNPSNPSHUWvraag $brondocument
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
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     * @param AantalVoorkomens $aantalVoorkomens
     * @param AardAantal $aardAantal
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort, $aantalVoorkomens, $aardAantal)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
      $this->aantalVoorkomens = $aantalVoorkomens;
      $this->aardAantal = $aardAantal;
    }

    /**
     * @return NPSgerelateerdeVraagScope
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NPSgerelateerdeVraagScope $gerelateerde
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
     */
    public function setRedenOntbinding($redenOntbinding)
    {
      $this->redenOntbinding = $redenOntbinding;
      return $this;
    }

    /**
     * @return InOnderzoekNPSNPSHUWvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNPSNPSHUWvraag $inOnderzoek
     * @return NPSNPSHUW-vraagScope
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheidvraag
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     * @return NPSNPSHUW-vraagScope
     */
    public function setAanduidingStrijdigheidNietigheid($aanduidingStrijdigheidNietigheid)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNPSNPSHUWvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNPSNPSHUWvraag $brondocument
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
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
     * @return NPSNPSHUW-vraagScope
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
