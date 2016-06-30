<?php

namespace RRSVP\Stuf;

class TGOhistorieMaterieel
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var AdrGrpantwoord $adresAanduidingGrp
     */
    protected $adresAanduidingGrp = null;

    /**
     * @var GeometriePunte $gbopuntGeometrie
     */
    protected $gbopuntGeometrie = null;

    /**
     * @var GeometrieVlake $vlakGeometrie
     */
    protected $vlakGeometrie = null;

    /**
     * @var TypeOGOofOTRe $type
     */
    protected $type = null;

    /**
     * @var BouwkundigeBestemming-e[] $gbobouwkundigeBestemming
     */
    protected $gbobouwkundigeBestemming = null;

    /**
     * @var Gebruiksdoeleinden-e[] $gebruiksdoel
     */
    protected $gebruiksdoel = null;

    /**
     * @var Maateenheid6e $gbobrutoInhoud
     */
    protected $gbobrutoInhoud = null;

    /**
     * @var Maateenheid6e $gbooppervlakte
     */
    protected $gbooppervlakte = null;

    /**
     * @var Jaare $ogobouwjaar
     */
    protected $ogobouwjaar = null;

    /**
     * @var Bouwlaage $vbotoegangBouwlaag
     */
    protected $vbotoegangBouwlaag = null;

    /**
     * @var OntsluitingVerdiepinge $vboontsluitingVerdieping
     */
    protected $vboontsluitingVerdieping = null;

    /**
     * @var StatusTGOe $aotstatus
     */
    protected $aotstatus = null;

    /**
     * @var StatusVoortgangBouwe $gbostatusVoortgangBouw
     */
    protected $gbostatusVoortgangBouw = null;

    /**
     * @var Indicatiee $aotgeconstateerd
     */
    protected $aotgeconstateerd = null;

    /**
     * @var InOnderzoekTGO $inOnderzoek
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
     * @var TGO-historieFormeel[] $historieFormeel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return AdrGrpantwoord
     */
    public function getAdresAanduidingGrp()
    {
      return $this->adresAanduidingGrp;
    }

    /**
     * @param AdrGrpantwoord $adresAanduidingGrp
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setAdresAanduidingGrp($adresAanduidingGrp)
    {
      $this->adresAanduidingGrp = $adresAanduidingGrp;
      return $this;
    }

    /**
     * @return GeometriePunte
     */
    public function getGbopuntGeometrie()
    {
      return $this->gbopuntGeometrie;
    }

    /**
     * @param GeometriePunte $gbopuntGeometrie
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGbopuntGeometrie($gbopuntGeometrie)
    {
      $this->gbopuntGeometrie = $gbopuntGeometrie;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getVlakGeometrie()
    {
      return $this->vlakGeometrie;
    }

    /**
     * @param GeometrieVlake $vlakGeometrie
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setVlakGeometrie($vlakGeometrie)
    {
      $this->vlakGeometrie = $vlakGeometrie;
      return $this;
    }

    /**
     * @return TypeOGOofOTRe
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TypeOGOofOTRe $type
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return BouwkundigeBestemming-e[]
     */
    public function getGbobouwkundigeBestemming()
    {
      return $this->gbobouwkundigeBestemming;
    }

    /**
     * @param BouwkundigeBestemming-e[] $gbobouwkundigeBestemming
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGbobouwkundigeBestemming(array $gbobouwkundigeBestemming = null)
    {
      $this->gbobouwkundigeBestemming = $gbobouwkundigeBestemming;
      return $this;
    }

    /**
     * @return Gebruiksdoeleinden-e[]
     */
    public function getGebruiksdoel()
    {
      return $this->gebruiksdoel;
    }

    /**
     * @param Gebruiksdoeleinden-e[] $gebruiksdoel
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGebruiksdoel(array $gebruiksdoel = null)
    {
      $this->gebruiksdoel = $gebruiksdoel;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getGbobrutoInhoud()
    {
      return $this->gbobrutoInhoud;
    }

    /**
     * @param Maateenheid6e $gbobrutoInhoud
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGbobrutoInhoud($gbobrutoInhoud)
    {
      $this->gbobrutoInhoud = $gbobrutoInhoud;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getGbooppervlakte()
    {
      return $this->gbooppervlakte;
    }

    /**
     * @param Maateenheid6e $gbooppervlakte
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGbooppervlakte($gbooppervlakte)
    {
      $this->gbooppervlakte = $gbooppervlakte;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getOgobouwjaar()
    {
      return $this->ogobouwjaar;
    }

    /**
     * @param Jaare $ogobouwjaar
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setOgobouwjaar($ogobouwjaar)
    {
      $this->ogobouwjaar = $ogobouwjaar;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getVbotoegangBouwlaag()
    {
      return $this->vbotoegangBouwlaag;
    }

    /**
     * @param Bouwlaage $vbotoegangBouwlaag
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setVbotoegangBouwlaag($vbotoegangBouwlaag)
    {
      $this->vbotoegangBouwlaag = $vbotoegangBouwlaag;
      return $this;
    }

    /**
     * @return OntsluitingVerdiepinge
     */
    public function getVboontsluitingVerdieping()
    {
      return $this->vboontsluitingVerdieping;
    }

    /**
     * @param OntsluitingVerdiepinge $vboontsluitingVerdieping
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setVboontsluitingVerdieping($vboontsluitingVerdieping)
    {
      $this->vboontsluitingVerdieping = $vboontsluitingVerdieping;
      return $this;
    }

    /**
     * @return StatusTGOe
     */
    public function getAotstatus()
    {
      return $this->aotstatus;
    }

    /**
     * @param StatusTGOe $aotstatus
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setAotstatus($aotstatus)
    {
      $this->aotstatus = $aotstatus;
      return $this;
    }

    /**
     * @return StatusVoortgangBouwe
     */
    public function getGbostatusVoortgangBouw()
    {
      return $this->gbostatusVoortgangBouw;
    }

    /**
     * @param StatusVoortgangBouwe $gbostatusVoortgangBouw
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setGbostatusVoortgangBouw($gbostatusVoortgangBouw)
    {
      $this->gbostatusVoortgangBouw = $gbostatusVoortgangBouw;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getAotgeconstateerd()
    {
      return $this->aotgeconstateerd;
    }

    /**
     * @param Indicatiee $aotgeconstateerd
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setAotgeconstateerd($aotgeconstateerd)
    {
      $this->aotgeconstateerd = $aotgeconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekTGO
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekTGO $inOnderzoek
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return TGO-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param TGO-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
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
     * @return \RRSVP\Stuf\TGO-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
