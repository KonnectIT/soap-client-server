<?php

class WDOvraag
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
     * @var WDOWOZvraag $isOnderdeelVan
     */
    protected $isOnderdeelVan = null;

    /**
     * @var WDOTGOvraag $bestaatUit
     */
    protected $bestaatUit = null;

    /**
     * @var WDOPNDvraag $bestaatUitPand
     */
    protected $bestaatUitPand = null;

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
     * @return NummerWOZDeelObjecte
     */
    public function getNummerWOZDeelObject()
    {
      return $this->nummerWOZDeelObject;
    }

    /**
     * @param NummerWOZDeelObjecte $nummerWOZDeelObject
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WDOWOZvraag
     */
    public function getIsOnderdeelVan()
    {
      return $this->isOnderdeelVan;
    }

    /**
     * @param WDOWOZvraag $isOnderdeelVan
     * @return WDO-vraag
     */
    public function setIsOnderdeelVan($isOnderdeelVan)
    {
      $this->isOnderdeelVan = $isOnderdeelVan;
      return $this;
    }

    /**
     * @return WDOTGOvraag
     */
    public function getBestaatUit()
    {
      return $this->bestaatUit;
    }

    /**
     * @param WDOTGOvraag $bestaatUit
     * @return WDO-vraag
     */
    public function setBestaatUit($bestaatUit)
    {
      $this->bestaatUit = $bestaatUit;
      return $this;
    }

    /**
     * @return WDOPNDvraag
     */
    public function getBestaatUitPand()
    {
      return $this->bestaatUitPand;
    }

    /**
     * @param WDOPNDvraag $bestaatUitPand
     * @return WDO-vraag
     */
    public function setBestaatUitPand($bestaatUitPand)
    {
      $this->bestaatUitPand = $bestaatUitPand;
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
     * @return WDO-vraag
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
     * @return WDO-vraag
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
     * @return WDO-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
