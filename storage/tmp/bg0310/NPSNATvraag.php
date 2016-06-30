<?php

class NPSNATvraag
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
     * @var InOnderzoekNATvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNATvraag $brondocument
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
     * @param NATgerelateerde $gerelateerde
     * @param TijdvakRelatie $tijdvakRelatie
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($gerelateerde, $tijdvakRelatie, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->gerelateerde = $gerelateerde;
      $this->tijdvakRelatie = $tijdvakRelatie;
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
     */
    public function setInpdatumVerlies($inpdatumVerlies)
    {
      $this->inpdatumVerlies = $inpdatumVerlies;
      return $this;
    }

    /**
     * @return InOnderzoekNATvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNATvraag $inOnderzoek
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
     */
    public function setAanduidingStrijdigheidNietigheid($aanduidingStrijdigheidNietigheid)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNATvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNATvraag $brondocument
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
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
     * @return NPSNAT-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
