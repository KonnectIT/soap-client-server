<?php

class VESTGONVNhistorieFormeelRelatie
{

    /**
     * @var TGOkerngegevens $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var StatusMetagegevenNoValue $inOnderzoek
     */
    protected $inOnderzoek = null;

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
     * @var VESTGONVN-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var VESTGONVN-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var VESTGONVNhistorieFormeelRelatie $historieFormeelRelatie
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
     * @param TijdvakRelatie $tijdvakRelatie
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
    public function __construct($tijdvakRelatie, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $noValue, $scope, $verwerkingssoort, $aantalVoorkomens, $aardAantal)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
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
     * @return TGOkerngegevens
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param TGOkerngegevens $gerelateerde
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return VESTGONVN-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param VESTGONVN-historieMaterieel[] $historieMaterieel
     * @return VESTGONVN-historieFormeelRelatie
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return VESTGONVN-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param VESTGONVN-historieFormeel[] $historieFormeel
     * @return VESTGONVN-historieFormeelRelatie
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return VESTGONVNhistorieFormeelRelatie
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param VESTGONVNhistorieFormeelRelatie $historieFormeelRelatie
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
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
     * @return VESTGONVN-historieFormeelRelatie
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
