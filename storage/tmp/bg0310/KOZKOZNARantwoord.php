<?php

class KOZKOZNARantwoord
{

    /**
     * @var KOZgerelateerdeKOZAntwoord $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var Maateenheid82e $overgangsgrootte
     */
    protected $overgangsgrootte = null;

    /**
     * @var OnroerendeZaakHistoriee $aard
     */
    protected $aard = null;

    /**
     * @var BrondocumentBRK $brondocument
     */
    protected $brondocument = null;

    /**
     * @var TijdvakRelatie $tijdvakRelatie
     */
    protected $tijdvakRelatie = null;

    /**
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var KOZKOZNAR-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var KOZKOZNARhistorieFormeelRelatie $historieFormeelRelatie
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
     * @param TijdvakRelatie $tijdvakRelatie
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakRelatie, $tijdstipRegistratie, $extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return KOZgerelateerdeKOZAntwoord
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param KOZgerelateerdeKOZAntwoord $gerelateerde
     * @return KOZKOZNAR-antwoord
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return Maateenheid82e
     */
    public function getOvergangsgrootte()
    {
      return $this->overgangsgrootte;
    }

    /**
     * @param Maateenheid82e $overgangsgrootte
     * @return KOZKOZNAR-antwoord
     */
    public function setOvergangsgrootte($overgangsgrootte)
    {
      $this->overgangsgrootte = $overgangsgrootte;
      return $this;
    }

    /**
     * @return OnroerendeZaakHistoriee
     */
    public function getAard()
    {
      return $this->aard;
    }

    /**
     * @param OnroerendeZaakHistoriee $aard
     * @return KOZKOZNAR-antwoord
     */
    public function setAard($aard)
    {
      $this->aard = $aard;
      return $this;
    }

    /**
     * @return BrondocumentBRK
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBRK $brondocument
     * @return KOZKOZNAR-antwoord
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
     * @return KOZKOZNAR-antwoord
     */
    public function setTijdvakRelatie($tijdvakRelatie)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
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
     * @return KOZKOZNAR-antwoord
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
     * @return KOZKOZNAR-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return KOZKOZNAR-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param KOZKOZNAR-historieFormeel[] $historieFormeel
     * @return KOZKOZNAR-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return KOZKOZNARhistorieFormeelRelatie
     */
    public function getHistorieFormeelRelatie()
    {
      return $this->historieFormeelRelatie;
    }

    /**
     * @param KOZKOZNARhistorieFormeelRelatie $historieFormeelRelatie
     * @return KOZKOZNAR-antwoord
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
     * @return KOZKOZNAR-antwoord
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
     * @return KOZKOZNAR-antwoord
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
     * @return KOZKOZNAR-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
