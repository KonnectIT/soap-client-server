<?php

namespace RRSVP\Stuf;

class TGOgerelateerdeKOZAntwoord
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingTGOe $typering
     */
    protected $typering = null;

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
     * @var Gebruiksdoeleinden-e[] $gebruiksdoel
     */
    protected $gebruiksdoel = null;

    /**
     * @var Maateenheid6e $gbooppervlakte
     */
    protected $gbooppervlakte = null;

    /**
     * @var StatusTGOe $aotstatus
     */
    protected $aotstatus = null;

    /**
     * @var Indicatiee $aotgeconstateerd
     */
    protected $aotgeconstateerd = null;

    /**
     * @var InOnderzoekTGO $inOnderzoek
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
     * @return ObjectNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param ObjectNummeringe $identificatie
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return Authentiek
     */
    public function getAuthentiek()
    {
      return $this->authentiek;
    }

    /**
     * @param Authentiek $authentiek
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingTGOe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingTGOe $typering
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setVlakGeometrie($vlakGeometrie)
    {
      $this->vlakGeometrie = $vlakGeometrie;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setGebruiksdoel(array $gebruiksdoel = null)
    {
      $this->gebruiksdoel = $gebruiksdoel;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setGbooppervlakte($gbooppervlakte)
    {
      $this->gbooppervlakte = $gbooppervlakte;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setAotstatus($aotstatus)
    {
      $this->aotstatus = $aotstatus;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
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
     * @return \RRSVP\Stuf\TGO-gerelateerdeKOZAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
