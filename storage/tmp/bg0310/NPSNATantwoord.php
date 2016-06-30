<?php

class NPSNATantwoord
{

    /**
     * @var NATgerelateerde $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var RedenVerkrijgingVerliesNationaliteite $inpredenVerkrijging
     */
    protected $inpredenVerkrijging = null;

    /**
     * @var DatumMetIndicator $inpdatumVerkrijging
     */
    protected $inpdatumVerkrijging = null;

    /**
     * @var RedenVerkrijgingVerliesNationaliteite $inpredenVerlies
     */
    protected $inpredenVerlies = null;

    /**
     * @var DatumMetIndicator $inpdatumVerlies
     */
    protected $inpdatumVerlies = null;

    /**
     * @var InOnderzoekNAT $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidNPSNAT $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNAT $brondocument
     */
    protected $brondocument = null;

    /**
     * @var TijdvakRelatie $tijdvakRelatie
     */
    protected $tijdvakRelatie = null;

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
     * @var NPSNAT-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var NPSNAT-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var NPSNAThistorieFormeelRelatie $historieFormeelRelatie
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
     * @param NATgerelateerde $gerelateerde
     * @param TijdvakRelatie $tijdvakRelatie
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($gerelateerde, $tijdvakRelatie, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->gerelateerde = $gerelateerde;
      $this->tijdvakRelatie = $tijdvakRelatie;
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return NATgerelateerde
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NATgerelateerde $gerelateerde
     * @return NPSNAT-antwoord
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return RedenVerkrijgingVerliesNationaliteite
     */
    public function getInpredenVerkrijging()
    {
      return $this->inpredenVerkrijging;
    }

    /**
     * @param RedenVerkrijgingVerliesNationaliteite $inpredenVerkrijging
     * @return NPSNAT-antwoord
     */
    public function setInpredenVerkrijging($inpredenVerkrijging)
    {
      $this->inpredenVerkrijging = $inpredenVerkrijging;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumVerkrijging()
    {
      return $this->inpdatumVerkrijging;
    }

    /**
     * @param DatumMetIndicator $inpdatumVerkrijging
     * @return NPSNAT-antwoord
     */
    public function setInpdatumVerkrijging($inpdatumVerkrijging)
    {
      $this->inpdatumVerkrijging = $inpdatumVerkrijging;
      return $this;
    }

    /**
     * @return RedenVerkrijgingVerliesNationaliteite
     */
    public function getInpredenVerlies()
    {
      return $this->inpredenVerlies;
    }

    /**
     * @param RedenVerkrijgingVerliesNationaliteite $inpredenVerlies
     * @return NPSNAT-antwoord
     */
    public function setInpredenVerlies($inpredenVerlies)
    {
      $this->inpredenVerlies = $inpredenVerlies;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumVerlies()
    {
      return $this->inpdatumVerlies;
    }

    /**
     * @param DatumMetIndicator $inpdatumVerlies
     * @return NPSNAT-antwoord
     */
    public function setInpdatumVerlies($inpdatumVerlies)
    {
      $this->inpdatumVerlies = $inpdatumVerlies;
      return $this;
    }

    /**
     * @return InOnderzoekNAT
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNAT $inOnderzoek
     * @return NPSNAT-antwoord
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheidNPSNAT
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheidNPSNAT $aanduidingStrijdigheidNietigheid
     * @return NPSNAT-antwoord
     */
    public function setAanduidingStrijdigheidNietigheid($aanduidingStrijdigheidNietigheid)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNAT
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNAT $brondocument
     * @return NPSNAT-antwoord
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return TijdvakRelatie
     */
    public function getTijdvakRelatie()
    {
      return $this->tijdvakRelatie;
    }

    /**
     * @param TijdvakRelatie $tijdvakRelatie
     * @return NPSNAT-antwoord
     */
    public function setTijdvakRelatie($tijdvakRelatie)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
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
     * @return NPSNAT-antwoord
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
     * @return NPSNAT-antwoord
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
     * @return NPSNAT-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPSNAT-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param NPSNAT-historieMaterieel[] $historieMaterieel
     * @return NPSNAT-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return NPSNAT-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NPSNAT-historieFormeel[] $historieFormeel
     * @return NPSNAT-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return NPSNAThistorieFormeelRelatie
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param NPSNAThistorieFormeelRelatie $historieFormeelRelatie
     * @return NPSNAT-antwoord
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
     * @return NPSNAT-antwoord
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
     * @return NPSNAT-antwoord
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
     * @return NPSNAT-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
