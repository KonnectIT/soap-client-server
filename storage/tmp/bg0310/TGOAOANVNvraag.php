<?php

class TGOAOANVNvraag
{

    /**
     * @var AOAgerelateerde $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var StatusMetagegevenNoValue $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBAGvraag $brondocument
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
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @var AardAantal $aardAantal
     */
    protected $aardAantal = null;

    /**
     * @param TijdvakRelatie $tijdvakRelatie
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
    public function __construct($tijdvakRelatie, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort, $aantalVoorkomens, $aardAantal)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
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
     * @return AOAgerelateerde
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param AOAgerelateerde $gerelateerde
     * @return TGOAOANVN-vraag
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
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
     * @return TGOAOANVN-vraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBAGvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBAGvraag $brondocument
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
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
     * @return TGOAOANVN-vraag
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
