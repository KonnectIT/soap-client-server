<?php

class WOZgerelateerdeAntwoord
{

    /**
     * @var WOZObjectNummere $wozObjectNummer
     */
    protected $wozObjectNummer = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var AanduidingWOZobjectGrpantwoord $aanduidingWOZobject
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
     * @var SoortObjectCodee $soortObjectCode
     */
    protected $soortObjectCode = null;

    /**
     * @var WaardeGegevensGrp $vastgesteldeWaarde
     */
    protected $vastgesteldeWaarde = null;

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
     * @var WOZKOZ-kerngegevens[] $bevatKadastraleObjecten
     */
    protected $bevatKadastraleObjecten = null;

    /**
     * @var WOZSUB-kerngegevens[] $heeftBelanghebbende
     */
    protected $heeftBelanghebbende = null;

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
     * @return WOZObjectNummere
     */
    public function getWozObjectNummer()
    {
      return $this->wozObjectNummer;
    }

    /**
     * @param WOZObjectNummere $wozObjectNummer
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setWozObjectNummer($wozObjectNummer)
    {
      $this->wozObjectNummer = $wozObjectNummer;
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
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return AanduidingWOZobjectGrpantwoord
     */
    public function getAanduidingWOZobject()
    {
      return $this->aanduidingWOZobject;
    }

    /**
     * @param AanduidingWOZobjectGrpantwoord $aanduidingWOZobject
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setGebruikscode($gebruikscode)
    {
      $this->gebruikscode = $gebruikscode;
      return $this;
    }

    /**
     * @return SoortObjectCodee
     */
    public function getSoortObjectCode()
    {
      return $this->soortObjectCode;
    }

    /**
     * @param SoortObjectCodee $soortObjectCode
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setSoortObjectCode($soortObjectCode)
    {
      $this->soortObjectCode = $soortObjectCode;
      return $this;
    }

    /**
     * @return WaardeGegevensGrp
     */
    public function getVastgesteldeWaarde()
    {
      return $this->vastgesteldeWaarde;
    }

    /**
     * @param WaardeGegevensGrp $vastgesteldeWaarde
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setVastgesteldeWaarde($vastgesteldeWaarde)
    {
      $this->vastgesteldeWaarde = $vastgesteldeWaarde;
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WOZKOZ-kerngegevens[]
     */
    public function getBevatKadastraleObjecten()
    {
      return $this->bevatKadastraleObjecten;
    }

    /**
     * @param WOZKOZ-kerngegevens[] $bevatKadastraleObjecten
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setBevatKadastraleObjecten(array $bevatKadastraleObjecten = null)
    {
      $this->bevatKadastraleObjecten = $bevatKadastraleObjecten;
      return $this;
    }

    /**
     * @return WOZSUB-kerngegevens[]
     */
    public function getHeeftBelanghebbende()
    {
      return $this->heeftBelanghebbende;
    }

    /**
     * @param WOZSUB-kerngegevens[] $heeftBelanghebbende
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setHeeftBelanghebbende(array $heeftBelanghebbende = null)
    {
      $this->heeftBelanghebbende = $heeftBelanghebbende;
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
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
     * @return WOZ-gerelateerdeAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
