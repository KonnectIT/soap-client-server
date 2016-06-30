<?php

class ZKRvraagScope
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
     * @var BrondocumentBRKvraag $brondocument
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
     * @var ZKRKOZvraagScope $heeftBetrekkingOp
     */
    protected $heeftBetrekkingOp = null;

    /**
     * @var ZKRRPSvraagScope $heeftAlsGerechtigde
     */
    protected $heeftAlsGerechtigde = null;

    /**
     * @var ZKRZRAvraagScope $heeftAlsAantekening
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
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
     */
    public function setBetrokkenInSplitsing($betrokkenInSplitsing)
    {
      $this->betrokkenInSplitsing = $betrokkenInSplitsing;
      return $this;
    }

    /**
     * @return BrondocumentBRKvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBRKvraag $brondocument
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return ZKRKOZvraagScope
     */
    public function getHeeftBetrekkingOp()
    {
      return $this->heeftBetrekkingOp;
    }

    /**
     * @param ZKRKOZvraagScope $heeftBetrekkingOp
     * @return ZKR-vraagScope
     */
    public function setHeeftBetrekkingOp($heeftBetrekkingOp)
    {
      $this->heeftBetrekkingOp = $heeftBetrekkingOp;
      return $this;
    }

    /**
     * @return ZKRRPSvraagScope
     */
    public function getHeeftAlsGerechtigde()
    {
      return $this->heeftAlsGerechtigde;
    }

    /**
     * @param ZKRRPSvraagScope $heeftAlsGerechtigde
     * @return ZKR-vraagScope
     */
    public function setHeeftAlsGerechtigde($heeftAlsGerechtigde)
    {
      $this->heeftAlsGerechtigde = $heeftAlsGerechtigde;
      return $this;
    }

    /**
     * @return ZKRZRAvraagScope
     */
    public function getHeeftAlsAantekening()
    {
      return $this->heeftAlsAantekening;
    }

    /**
     * @param ZKRZRAvraagScope $heeftAlsAantekening
     * @return ZKR-vraagScope
     */
    public function setHeeftAlsAantekening($heeftAlsAantekening)
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
     * @return ZKR-vraagScope
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
     * @return ZKR-vraagScope
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return ZKR-vraagScope
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
