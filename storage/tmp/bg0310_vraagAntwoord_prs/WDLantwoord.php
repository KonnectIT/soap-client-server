<?php

namespace RRSVP\Stuf;

class WDLantwoord
{

    /**
     * @var TypeWatere $type
     */
    protected $type = null;

    /**
     * @var TypeInfrastructuure $typeInfrastructuur
     */
    protected $typeInfrastructuur = null;

    /**
     * @var IdentificatieIMGeoe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var StatusGeoElemente $status
     */
    protected $status = null;

    /**
     * @var ScopedNamee $naam
     */
    protected $naam = null;

    /**
     * @var GeometrieIMGeoe $geometrie
     */
    protected $geometrie = null;

    /**
     * @var RelatieveHoogteligginge $relatieveHoogteligging
     */
    protected $relatieveHoogteligging = null;

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
     * @var WDL-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var WDL-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

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
     * @return TypeWatere
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TypeWatere $type
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return TypeInfrastructuure
     */
    public function getTypeInfrastructuur()
    {
      return $this->typeInfrastructuur;
    }

    /**
     * @param TypeInfrastructuure $typeInfrastructuur
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setTypeInfrastructuur($typeInfrastructuur)
    {
      $this->typeInfrastructuur = $typeInfrastructuur;
      return $this;
    }

    /**
     * @return IdentificatieIMGeoe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param IdentificatieIMGeoe $identificatie
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return StatusGeoElemente
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StatusGeoElemente $status
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ScopedNamee
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param ScopedNamee $naam
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
      return $this;
    }

    /**
     * @return GeometrieIMGeoe
     */
    public function getGeometrie()
    {
      return $this->geometrie;
    }

    /**
     * @param GeometrieIMGeoe $geometrie
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return RelatieveHoogteligginge
     */
    public function getRelatieveHoogteligging()
    {
      return $this->relatieveHoogteligging;
    }

    /**
     * @param RelatieveHoogteligginge $relatieveHoogteligging
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setRelatieveHoogteligging($relatieveHoogteligging)
    {
      $this->relatieveHoogteligging = $relatieveHoogteligging;
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WDL-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param WDL-historieMaterieel[] $historieMaterieel
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return WDL-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param WDL-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
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
     * @return \RRSVP\Stuf\WDL-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
