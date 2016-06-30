<?php

namespace RRSVP\Stuf;

class WDObasis
{

    /**
     * @var NummerWOZDeelObjecte $nummerWOZDeelObject
     */
    protected $nummerWOZDeelObject = null;

    /**
     * @var CodeWOZDeelObjecte $codeWOZDeelObject
     */
    protected $codeWOZDeelObject = null;

    /**
     * @var StatusObjecte $statusWOZDeelObject
     */
    protected $statusWOZDeelObject = null;

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
     * @var WDOWOZbasis $isOnderdeelVan
     */
    protected $isOnderdeelVan = null;

    /**
     * @var WDOTGO-basis[] $bestaatUit
     */
    protected $bestaatUit = null;

    /**
     * @var WDOPND-basis[] $bestaatUitPand
     */
    protected $bestaatUitPand = null;

    /**
     * @var WDO-basis[] $historieMaterieel
     */
    protected $historieMaterieel = null;

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
     * @var Sleutel $sleutelSynchronisatie
     */
    protected $sleutelSynchronisatie = null;

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
     * @param Sleutel $sleutelVerzendend
     * @param Sleutel $sleutelOntvangend
     * @param Sleutel $sleutelGegevensbeheer
     * @param Sleutel $sleutelSynchronisatie
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $sleutelSynchronisatie, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->sleutelVerzendend = $sleutelVerzendend;
      $this->sleutelOntvangend = $sleutelOntvangend;
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return NummerWOZDeelObjecte
     */
    public function getNummerWOZDeelObject()
    {
      return $this->nummerWOZDeelObject;
    }

    /**
     * @param NummerWOZDeelObjecte $nummerWOZDeelObject
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setNummerWOZDeelObject($nummerWOZDeelObject)
    {
      $this->nummerWOZDeelObject = $nummerWOZDeelObject;
      return $this;
    }

    /**
     * @return CodeWOZDeelObjecte
     */
    public function getCodeWOZDeelObject()
    {
      return $this->codeWOZDeelObject;
    }

    /**
     * @param CodeWOZDeelObjecte $codeWOZDeelObject
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setCodeWOZDeelObject($codeWOZDeelObject)
    {
      $this->codeWOZDeelObject = $codeWOZDeelObject;
      return $this;
    }

    /**
     * @return StatusObjecte
     */
    public function getStatusWOZDeelObject()
    {
      return $this->statusWOZDeelObject;
    }

    /**
     * @param StatusObjecte $statusWOZDeelObject
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setStatusWOZDeelObject($statusWOZDeelObject)
    {
      $this->statusWOZDeelObject = $statusWOZDeelObject;
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WDOWOZbasis
     */
    public function getIsOnderdeelVan()
    {
      return $this->isOnderdeelVan;
    }

    /**
     * @param WDOWOZbasis $isOnderdeelVan
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setIsOnderdeelVan($isOnderdeelVan)
    {
      $this->isOnderdeelVan = $isOnderdeelVan;
      return $this;
    }

    /**
     * @return WDOTGO-basis[]
     */
    public function getBestaatUit()
    {
      return $this->bestaatUit;
    }

    /**
     * @param WDOTGO-basis[] $bestaatUit
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setBestaatUit(array $bestaatUit = null)
    {
      $this->bestaatUit = $bestaatUit;
      return $this;
    }

    /**
     * @return WDOPND-basis[]
     */
    public function getBestaatUitPand()
    {
      return $this->bestaatUitPand;
    }

    /**
     * @param WDOPND-basis[] $bestaatUitPand
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setBestaatUitPand(array $bestaatUitPand = null)
    {
      $this->bestaatUitPand = $bestaatUitPand;
      return $this;
    }

    /**
     * @return WDO-basis[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param WDO-basis[] $historieMaterieel
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setSleutelGegevensbeheer($sleutelGegevensbeheer)
    {
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelSynchronisatie()
    {
      return $this->sleutelSynchronisatie;
    }

    /**
     * @param Sleutel $sleutelSynchronisatie
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setSleutelSynchronisatie($sleutelSynchronisatie)
    {
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
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
     * @return \RRSVP\Stuf\WDO-basis
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
