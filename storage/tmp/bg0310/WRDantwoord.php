<?php

class WRDantwoord
{

    /**
     * @var Peildatume $waardepeildatum
     */
    protected $waardepeildatum = null;

    /**
     * @var Peildatume $toestandspeildatum
     */
    protected $toestandspeildatum = null;

    /**
     * @var Maateenheid11e $vastgesteldeWaarde
     */
    protected $vastgesteldeWaarde = null;

    /**
     * @var BeschikkingGrp[] $beschikking
     */
    protected $beschikking = null;

    /**
     * @var InOnderzoekWRD $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var TijdvakObject $tijdvakObject
     */
    protected $tijdvakObject = null;

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
     * @var WRD-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var WRD-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var WRDWOZantwoord $isVoor
     */
    protected $isVoor = null;

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
     * @param TijdvakObject $tijdvakObject
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakObject, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Peildatume
     */
    public function getWaardepeildatum()
    {
      return $this->waardepeildatum;
    }

    /**
     * @param Peildatume $waardepeildatum
     * @return WRD-antwoord
     */
    public function setWaardepeildatum($waardepeildatum)
    {
      $this->waardepeildatum = $waardepeildatum;
      return $this;
    }

    /**
     * @return Peildatume
     */
    public function getToestandspeildatum()
    {
      return $this->toestandspeildatum;
    }

    /**
     * @param Peildatume $toestandspeildatum
     * @return WRD-antwoord
     */
    public function setToestandspeildatum($toestandspeildatum)
    {
      $this->toestandspeildatum = $toestandspeildatum;
      return $this;
    }

    /**
     * @return Maateenheid11e
     */
    public function getVastgesteldeWaarde()
    {
      return $this->vastgesteldeWaarde;
    }

    /**
     * @param Maateenheid11e $vastgesteldeWaarde
     * @return WRD-antwoord
     */
    public function setVastgesteldeWaarde($vastgesteldeWaarde)
    {
      $this->vastgesteldeWaarde = $vastgesteldeWaarde;
      return $this;
    }

    /**
     * @return BeschikkingGrp[]
     */
    public function getBeschikking()
    {
      return $this->beschikking;
    }

    /**
     * @param BeschikkingGrp[] $beschikking
     * @return WRD-antwoord
     */
    public function setBeschikking(array $beschikking = null)
    {
      $this->beschikking = $beschikking;
      return $this;
    }

    /**
     * @return InOnderzoekWRD
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekWRD $inOnderzoek
     * @return WRD-antwoord
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return TijdvakObject
     */
    public function getTijdvakObject()
    {
      return $this->tijdvakObject;
    }

    /**
     * @param TijdvakObject $tijdvakObject
     * @return WRD-antwoord
     */
    public function setTijdvakObject($tijdvakObject)
    {
      $this->tijdvakObject = $tijdvakObject;
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
     * @return WRD-antwoord
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
     * @return WRD-antwoord
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
     * @return WRD-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WRD-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param WRD-historieMaterieel[] $historieMaterieel
     * @return WRD-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return WRD-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param WRD-historieFormeel[] $historieFormeel
     * @return WRD-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return WRDWOZantwoord
     */
    public function getIsVoor()
    {
      return $this->isVoor;
    }

    /**
     * @param WRDWOZantwoord $isVoor
     * @return WRD-antwoord
     */
    public function setIsVoor($isVoor)
    {
      $this->isVoor = $isVoor;
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
     * @return WRD-antwoord
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
     * @return WRD-antwoord
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
     * @return WRD-antwoord
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
     * @return WRD-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
