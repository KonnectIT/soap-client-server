<?php

class WOZvraagSelectie
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
     * @var AanduidingWOZobjectGrpvraag $aanduidingWOZobject
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
     * @var InOnderzoekWOZvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentWOZvraag $brondocument
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
     * @var WOZWDOvraag $heeftDeelobject
     */
    protected $heeftDeelobject = null;

    /**
     * @var WOZKOZvraagSelectie $bevatKadastraleObjecten
     */
    protected $bevatKadastraleObjecten = null;

    /**
     * @var WOZSUBvraagSelectie $heeftBelanghebbende
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
     * @return WOZObjectNummere
     */
    public function getWozObjectNummer()
    {
      return $this->wozObjectNummer;
    }

    /**
     * @param WOZObjectNummere $wozObjectNummer
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return AanduidingWOZobjectGrpvraag
     */
    public function getAanduidingWOZobject()
    {
      return $this->aanduidingWOZobject;
    }

    /**
     * @param AanduidingWOZobjectGrpvraag $aanduidingWOZobject
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
     */
    public function setVastgesteldeWaarde($vastgesteldeWaarde)
    {
      $this->vastgesteldeWaarde = $vastgesteldeWaarde;
      return $this;
    }

    /**
     * @return InOnderzoekWOZvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekWOZvraag $inOnderzoek
     * @return WOZ-vraagSelectie
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentWOZvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentWOZvraag $brondocument
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WOZWDOvraag
     */
    public function getHeeftDeelobject()
    {
      return $this->heeftDeelobject;
    }

    /**
     * @param WOZWDOvraag $heeftDeelobject
     * @return WOZ-vraagSelectie
     */
    public function setHeeftDeelobject($heeftDeelobject)
    {
      $this->heeftDeelobject = $heeftDeelobject;
      return $this;
    }

    /**
     * @return WOZKOZvraagSelectie
     */
    public function getBevatKadastraleObjecten()
    {
      return $this->bevatKadastraleObjecten;
    }

    /**
     * @param WOZKOZvraagSelectie $bevatKadastraleObjecten
     * @return WOZ-vraagSelectie
     */
    public function setBevatKadastraleObjecten($bevatKadastraleObjecten)
    {
      $this->bevatKadastraleObjecten = $bevatKadastraleObjecten;
      return $this;
    }

    /**
     * @return WOZSUBvraagSelectie
     */
    public function getHeeftBelanghebbende()
    {
      return $this->heeftBelanghebbende;
    }

    /**
     * @param WOZSUBvraagSelectie $heeftBelanghebbende
     * @return WOZ-vraagSelectie
     */
    public function setHeeftBelanghebbende($heeftBelanghebbende)
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
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
     * @return WOZ-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
