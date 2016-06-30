<?php

class ZKRgerelateerdeKOZAntwoord
{

    /**
     * @var IdentificatieBRKe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var AardZakelijkRechte $avraard
     */
    protected $avraard = null;

    /**
     * @var Omschrijving200e $avromschrijving
     */
    protected $avromschrijving = null;

    /**
     * @var AardZakelijkRechtVerkorte $arvaardVerkort
     */
    protected $arvaardVerkort = null;

    /**
     * @var Omschrijving100e $arvomschrijvingVerkort
     */
    protected $arvomschrijvingVerkort = null;

    /**
     * @var AandeelRechtGrp $aandeelRecht
     */
    protected $aandeelRecht = null;

    /**
     * @var Booleane $betrokkenInSplitsing
     */
    protected $betrokkenInSplitsing = null;

    /**
     * @var BrondocumentBRK $brondocument
     */
    protected $brondocument = null;

    /**
     * @var DatumMetIndicator $ingangsdatumRecht
     */
    protected $ingangsdatumRecht = null;

    /**
     * @var DatumMetIndicator $einddatumRecht
     */
    protected $einddatumRecht = null;

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
     * @var ZKRRPSgerelateerdeAntwoord $heeftAlsGerechtigde
     */
    protected $heeftAlsGerechtigde = null;

    /**
     * @var ZKRZRA-antwoord[] $heeftAlsAantekening
     */
    protected $heeftAlsAantekening = null;

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
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return IdentificatieBRKe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param IdentificatieBRKe $identificatie
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return AardZakelijkRechte
     */
    public function getAvraard()
    {
      return $this->avraard;
    }

    /**
     * @param AardZakelijkRechte $avraard
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setAvraard($avraard)
    {
      $this->avraard = $avraard;
      return $this;
    }

    /**
     * @return Omschrijving200e
     */
    public function getAvromschrijving()
    {
      return $this->avromschrijving;
    }

    /**
     * @param Omschrijving200e $avromschrijving
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setAvromschrijving($avromschrijving)
    {
      $this->avromschrijving = $avromschrijving;
      return $this;
    }

    /**
     * @return AardZakelijkRechtVerkorte
     */
    public function getArvaardVerkort()
    {
      return $this->arvaardVerkort;
    }

    /**
     * @param AardZakelijkRechtVerkorte $arvaardVerkort
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setArvaardVerkort($arvaardVerkort)
    {
      $this->arvaardVerkort = $arvaardVerkort;
      return $this;
    }

    /**
     * @return Omschrijving100e
     */
    public function getArvomschrijvingVerkort()
    {
      return $this->arvomschrijvingVerkort;
    }

    /**
     * @param Omschrijving100e $arvomschrijvingVerkort
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setArvomschrijvingVerkort($arvomschrijvingVerkort)
    {
      $this->arvomschrijvingVerkort = $arvomschrijvingVerkort;
      return $this;
    }

    /**
     * @return AandeelRechtGrp
     */
    public function getAandeelRecht()
    {
      return $this->aandeelRecht;
    }

    /**
     * @param AandeelRechtGrp $aandeelRecht
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setAandeelRecht($aandeelRecht)
    {
      $this->aandeelRecht = $aandeelRecht;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getBetrokkenInSplitsing()
    {
      return $this->betrokkenInSplitsing;
    }

    /**
     * @param Booleane $betrokkenInSplitsing
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setBetrokkenInSplitsing($betrokkenInSplitsing)
    {
      $this->betrokkenInSplitsing = $betrokkenInSplitsing;
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
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngangsdatumRecht()
    {
      return $this->ingangsdatumRecht;
    }

    /**
     * @param DatumMetIndicator $ingangsdatumRecht
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setIngangsdatumRecht($ingangsdatumRecht)
    {
      $this->ingangsdatumRecht = $ingangsdatumRecht;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEinddatumRecht()
    {
      return $this->einddatumRecht;
    }

    /**
     * @param DatumMetIndicator $einddatumRecht
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setEinddatumRecht($einddatumRecht)
    {
      $this->einddatumRecht = $einddatumRecht;
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
     * @return ZKR-gerelateerdeKOZAntwoord
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
     * @return ZKR-gerelateerdeKOZAntwoord
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
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return ZKRRPSgerelateerdeAntwoord
     */
    public function getHeeftAlsGerechtigde()
    {
      return $this->heeftAlsGerechtigde;
    }

    /**
     * @param ZKRRPSgerelateerdeAntwoord $heeftAlsGerechtigde
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setHeeftAlsGerechtigde($heeftAlsGerechtigde)
    {
      $this->heeftAlsGerechtigde = $heeftAlsGerechtigde;
      return $this;
    }

    /**
     * @return ZKRZRA-antwoord[]
     */
    public function getHeeftAlsAantekening()
    {
      return $this->heeftAlsAantekening;
    }

    /**
     * @param ZKRZRA-antwoord[] $heeftAlsAantekening
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setHeeftAlsAantekening(array $heeftAlsAantekening = null)
    {
      $this->heeftAlsAantekening = $heeftAlsAantekening;
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
     * @return ZKR-gerelateerdeKOZAntwoord
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
     * @return ZKR-gerelateerdeKOZAntwoord
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
     * @return ZKR-gerelateerdeKOZAntwoord
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
     * @return ZKR-gerelateerdeKOZAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
