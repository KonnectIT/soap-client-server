<?php

class NPSNPSKNDvraagSelectie
{

    /**
     * @var NPSgerelateerdeVraagSelectie $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var OuderAanduidinge $ouderAanduiding
     */
    protected $ouderAanduiding = null;

    /**
     * @var DatumMetIndicator $datumIngangFamilierechtelijkeBetrekking
     */
    protected $datumIngangFamilierechtelijkeBetrekking = null;

    /**
     * @var DatumMetIndicator $datumEindeFamilierechtelijkeBetrekking
     */
    protected $datumEindeFamilierechtelijkeBetrekking = null;

    /**
     * @var StatusMetagegevenNoValue $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNPSNPSKNDvraag $brondocument
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
     * @return NPSgerelateerdeVraagSelectie
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NPSgerelateerdeVraagSelectie $gerelateerde
     * @return NPSNPSKND-vraagSelectie
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return OuderAanduidinge
     */
    public function getOuderAanduiding()
    {
      return $this->ouderAanduiding;
    }

    /**
     * @param OuderAanduidinge $ouderAanduiding
     * @return NPSNPSKND-vraagSelectie
     */
    public function setOuderAanduiding($ouderAanduiding)
    {
      $this->ouderAanduiding = $ouderAanduiding;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumIngangFamilierechtelijkeBetrekking()
    {
      return $this->datumIngangFamilierechtelijkeBetrekking;
    }

    /**
     * @param DatumMetIndicator $datumIngangFamilierechtelijkeBetrekking
     * @return NPSNPSKND-vraagSelectie
     */
    public function setDatumIngangFamilierechtelijkeBetrekking($datumIngangFamilierechtelijkeBetrekking)
    {
      $this->datumIngangFamilierechtelijkeBetrekking = $datumIngangFamilierechtelijkeBetrekking;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumEindeFamilierechtelijkeBetrekking()
    {
      return $this->datumEindeFamilierechtelijkeBetrekking;
    }

    /**
     * @param DatumMetIndicator $datumEindeFamilierechtelijkeBetrekking
     * @return NPSNPSKND-vraagSelectie
     */
    public function setDatumEindeFamilierechtelijkeBetrekking($datumEindeFamilierechtelijkeBetrekking)
    {
      $this->datumEindeFamilierechtelijkeBetrekking = $datumEindeFamilierechtelijkeBetrekking;
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
     */
    public function setAanduidingStrijdigheidNietigheid($aanduidingStrijdigheidNietigheid)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNPSNPSKNDvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNPSNPSKNDvraag $brondocument
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
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
     * @return NPSNPSKND-vraagSelectie
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
