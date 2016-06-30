<?php

namespace RRSVP\Stuf;

class PNDhistorieMaterieel
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var GeometrieVlake $geometrie
     */
    protected $geometrie = null;

    /**
     * @var GeometrieVlake $geometrieOpMaaiveld
     */
    protected $geometrieOpMaaiveld = null;

    /**
     * @var Jaare $bouwjaar
     */
    protected $bouwjaar = null;

    /**
     * @var Maateenheid6e $oppervlakte
     */
    protected $oppervlakte = null;

    /**
     * @var Maateenheid6e $brutoInhoud
     */
    protected $brutoInhoud = null;

    /**
     * @var RelatieveHoogteligginge $relatieveHoogteligging
     */
    protected $relatieveHoogteligging = null;

    /**
     * @var StatusPande $status
     */
    protected $status = null;

    /**
     * @var StatusVoortgangBouwe $statusVoortgangBouw
     */
    protected $statusVoortgangBouw = null;

    /**
     * @var Indicatiee $geconstateerd
     */
    protected $geconstateerd = null;

    /**
     * @var InOnderzoekPND $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBGR $brondocument
     */
    protected $brondocument = null;

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
     * @var PND-historieFormeel[] $historieFormeel
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
     * @return ObjectNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param ObjectNummeringe $identificatie
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getGeometrie()
    {
      return $this->geometrie;
    }

    /**
     * @param GeometrieVlake $geometrie
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getGeometrieOpMaaiveld()
    {
      return $this->geometrieOpMaaiveld;
    }

    /**
     * @param GeometrieVlake $geometrieOpMaaiveld
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setGeometrieOpMaaiveld($geometrieOpMaaiveld)
    {
      $this->geometrieOpMaaiveld = $geometrieOpMaaiveld;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getBouwjaar()
    {
      return $this->bouwjaar;
    }

    /**
     * @param Jaare $bouwjaar
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setBouwjaar($bouwjaar)
    {
      $this->bouwjaar = $bouwjaar;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getOppervlakte()
    {
      return $this->oppervlakte;
    }

    /**
     * @param Maateenheid6e $oppervlakte
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setOppervlakte($oppervlakte)
    {
      $this->oppervlakte = $oppervlakte;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getBrutoInhoud()
    {
      return $this->brutoInhoud;
    }

    /**
     * @param Maateenheid6e $brutoInhoud
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setBrutoInhoud($brutoInhoud)
    {
      $this->brutoInhoud = $brutoInhoud;
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setRelatieveHoogteligging($relatieveHoogteligging)
    {
      $this->relatieveHoogteligging = $relatieveHoogteligging;
      return $this;
    }

    /**
     * @return StatusPande
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StatusPande $status
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return StatusVoortgangBouwe
     */
    public function getStatusVoortgangBouw()
    {
      return $this->statusVoortgangBouw;
    }

    /**
     * @param StatusVoortgangBouwe $statusVoortgangBouw
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setStatusVoortgangBouw($statusVoortgangBouw)
    {
      $this->statusVoortgangBouw = $statusVoortgangBouw;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getGeconstateerd()
    {
      return $this->geconstateerd;
    }

    /**
     * @param Indicatiee $geconstateerd
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setGeconstateerd($geconstateerd)
    {
      $this->geconstateerd = $geconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekPND
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekPND $inOnderzoek
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBGR
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBGR $brondocument
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return PND-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param PND-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
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
     * @return \RRSVP\Stuf\PND-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
