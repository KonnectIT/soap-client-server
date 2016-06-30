<?php

namespace RRSVP\Stuf;

class KZAvraagScope
{

    /**
     * @var IdentificatieBRKe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var AardAantekeningKOZe $aard
     */
    protected $aard = null;

    /**
     * @var OmschrijvingKZAe $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var SplitsingKZAe $splitsing
     */
    protected $splitsing = null;

    /**
     * @var BrondocumentBRKvraag $brondocument
     */
    protected $brondocument = null;

    /**
     * @var DatumMetIndicator $ingangsdatumObject
     */
    protected $ingangsdatumObject = null;

    /**
     * @var DatumMetIndicator $einddatumObject
     */
    protected $einddatumObject = null;

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
     * @var KZAKOZvraagScope $hoortBij
     */
    protected $hoortBij = null;

    /**
     * @var KZARPSvraagScope $heeftBetrokken
     */
    protected $heeftBetrokken = null;

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
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return AardAantekeningKOZe
     */
    public function getAard()
    {
      return $this->aard;
    }

    /**
     * @param AardAantekeningKOZe $aard
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setAard($aard)
    {
      $this->aard = $aard;
      return $this;
    }

    /**
     * @return OmschrijvingKZAe
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param OmschrijvingKZAe $omschrijving
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return SplitsingKZAe
     */
    public function getSplitsing()
    {
      return $this->splitsing;
    }

    /**
     * @param SplitsingKZAe $splitsing
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setSplitsing($splitsing)
    {
      $this->splitsing = $splitsing;
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
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngangsdatumObject()
    {
      return $this->ingangsdatumObject;
    }

    /**
     * @param DatumMetIndicator $ingangsdatumObject
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setIngangsdatumObject($ingangsdatumObject)
    {
      $this->ingangsdatumObject = $ingangsdatumObject;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEinddatumObject()
    {
      return $this->einddatumObject;
    }

    /**
     * @param DatumMetIndicator $einddatumObject
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setEinddatumObject($einddatumObject)
    {
      $this->einddatumObject = $einddatumObject;
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
     * @return \RRSVP\Stuf\KZA-vraagScope
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
     * @return \RRSVP\Stuf\KZA-vraagScope
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
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return KZAKOZvraagScope
     */
    public function getHoortBij()
    {
      return $this->hoortBij;
    }

    /**
     * @param KZAKOZvraagScope $hoortBij
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setHoortBij($hoortBij)
    {
      $this->hoortBij = $hoortBij;
      return $this;
    }

    /**
     * @return KZARPSvraagScope
     */
    public function getHeeftBetrokken()
    {
      return $this->heeftBetrokken;
    }

    /**
     * @param KZARPSvraagScope $heeftBetrokken
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setHeeftBetrokken($heeftBetrokken)
    {
      $this->heeftBetrokken = $heeftBetrokken;
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
     * @return \RRSVP\Stuf\KZA-vraagScope
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
     * @return \RRSVP\Stuf\KZA-vraagScope
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
     * @return \RRSVP\Stuf\KZA-vraagScope
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
