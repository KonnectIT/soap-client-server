<?php

namespace RRSVP\Stuf;

class WOZhistorieFormeel
{

    /**
     * @var AanduidingWOZobjectGrphistorie $aanduidingWOZobject
     */
    protected $aanduidingWOZobject = null;

    /**
     * @var GeometrieVlake $wozObjectGeometrie
     */
    protected $wozObjectGeometrie = null;

    /**
     * @var StatusObjecte $statusWozObject
     */
    protected $statusWozObject = null;

    /**
     * @var Maateenheid11e $grondoppervlakte
     */
    protected $grondoppervlakte = null;

    /**
     * @var Gebruikscodee $gebruikscode
     */
    protected $gebruikscode = null;

    /**
     * @var InOnderzoekWOZ $inOnderzoek
     */
    protected $inOnderzoek = null;

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
     * @var WOZ-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

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
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->sleutelVerzendend = $sleutelVerzendend;
      $this->sleutelOntvangend = $sleutelOntvangend;
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      $this->noValue = $noValue;
      $this->scope = $scope;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return AanduidingWOZobjectGrphistorie
     */
    public function getAanduidingWOZobject()
    {
      return $this->aanduidingWOZobject;
    }

    /**
     * @param AanduidingWOZobjectGrphistorie $aanduidingWOZobject
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setAanduidingWOZobject($aanduidingWOZobject)
    {
      $this->aanduidingWOZobject = $aanduidingWOZobject;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getWozObjectGeometrie()
    {
      return $this->wozObjectGeometrie;
    }

    /**
     * @param GeometrieVlake $wozObjectGeometrie
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setWozObjectGeometrie($wozObjectGeometrie)
    {
      $this->wozObjectGeometrie = $wozObjectGeometrie;
      return $this;
    }

    /**
     * @return StatusObjecte
     */
    public function getStatusWozObject()
    {
      return $this->statusWozObject;
    }

    /**
     * @param StatusObjecte $statusWozObject
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setStatusWozObject($statusWozObject)
    {
      $this->statusWozObject = $statusWozObject;
      return $this;
    }

    /**
     * @return Maateenheid11e
     */
    public function getGrondoppervlakte()
    {
      return $this->grondoppervlakte;
    }

    /**
     * @param Maateenheid11e $grondoppervlakte
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setGrondoppervlakte($grondoppervlakte)
    {
      $this->grondoppervlakte = $grondoppervlakte;
      return $this;
    }

    /**
     * @return Gebruikscodee
     */
    public function getGebruikscode()
    {
      return $this->gebruikscode;
    }

    /**
     * @param Gebruikscodee $gebruikscode
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setGebruikscode($gebruikscode)
    {
      $this->gebruikscode = $gebruikscode;
      return $this;
    }

    /**
     * @return InOnderzoekWOZ
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekWOZ $inOnderzoek
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WOZ-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param WOZ-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setSleutelGegevensbeheer($sleutelGegevensbeheer)
    {
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
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
     * @return \RRSVP\Stuf\WOZ-historieFormeel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
