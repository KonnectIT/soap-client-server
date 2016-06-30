<?php

namespace RRSVP\Stuf;

class NNPRPSantwoord
{

    /**
     * @var RPSgerelateerdeAntwoord $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var FunctionarisTypee $functionarisType
     */
    protected $functionarisType = null;

    /**
     * @var InOnderzoekNNPRPS[] $inOnderzoek
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
     * @var NNPRPS-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var NNPRPS-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var NNPRPShistorieFormeelRelatie $historieFormeelRelatie
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
     * @param RPSgerelateerdeAntwoord $gerelateerde
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
     * @return RPSgerelateerdeAntwoord
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param RPSgerelateerdeAntwoord $gerelateerde
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return FunctionarisTypee
     */
    public function getFunctionarisType()
    {
      return $this->functionarisType;
    }

    /**
     * @param FunctionarisTypee $functionarisType
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setFunctionarisType($functionarisType)
    {
      $this->functionarisType = $functionarisType;
      return $this;
    }

    /**
     * @return InOnderzoekNNPRPS[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNNPRPS[] $inOnderzoek
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setInOnderzoek(array $inOnderzoek = null)
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NNPRPS-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param NNPRPS-historieMaterieel[] $historieMaterieel
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return NNPRPS-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NNPRPS-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return NNPRPShistorieFormeelRelatie
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param NNPRPShistorieFormeelRelatie $historieFormeelRelatie
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
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
     * @return \RRSVP\Stuf\NNPRPS-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
