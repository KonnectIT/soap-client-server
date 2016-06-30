<?php

namespace RRSVP\Stuf;

class WDOgerelateerdeWOZVraag
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
     * @var WDOTGOgerelateerdeWOZvraag $bestaatUit
     */
    protected $bestaatUit = null;

    /**
     * @var WDOPNDgerelateerdeWOZvraag $bestaatUitPand
     */
    protected $bestaatUitPand = null;

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
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WDOTGOgerelateerdeWOZvraag
     */
    public function getBestaatUit()
    {
      return $this->bestaatUit;
    }

    /**
     * @param WDOTGOgerelateerdeWOZvraag $bestaatUit
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
     */
    public function setBestaatUit($bestaatUit)
    {
      $this->bestaatUit = $bestaatUit;
      return $this;
    }

    /**
     * @return WDOPNDgerelateerdeWOZvraag
     */
    public function getBestaatUitPand()
    {
      return $this->bestaatUitPand;
    }

    /**
     * @param WDOPNDgerelateerdeWOZvraag $bestaatUitPand
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
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
     * @return \RRSVP\Stuf\WDO-gerelateerdeWOZVraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
