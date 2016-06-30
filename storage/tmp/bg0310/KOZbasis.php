<?php

class KOZbasis
{

    /**
     * @var KadastraleIdentificatiee $kadastraleIdentificatie
     */
    protected $kadastraleIdentificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingKOZe $typering
     */
    protected $typering = null;

    /**
     * @var KadastraleAanduidingGrp $kadastraleAanduiding
     */
    protected $kadastraleAanduiding = null;

    /**
     * @var KadastraleGemeentenaame $kadastraleGemeentenaam
     */
    protected $kadastraleGemeentenaam = null;

    /**
     * @var LocatieKOZGrp $locatieOnroerendeZaak
     */
    protected $locatieOnroerendeZaak = null;

    /**
     * @var KOZTGO-basis[] $hoortBij
     */
    protected $hoortBij = null;

    /**
     * @var GeometriePunte $kdpplaatscoordinaten
     */
    protected $kdpplaatscoordinaten = null;

    /**
     * @var Maateenheid82nege $kdpgrootte
     */
    protected $kdpgrootte = null;

    /**
     * @var Booleane $kdpvastgesteldeGrootte
     */
    protected $kdpvastgesteldeGrootte = null;

    /**
     * @var GeometrieVlake $kdpbegrenzing
     */
    protected $kdpbegrenzing = null;

    /**
     * @var OmschrijvingDeelperceele $kdpomschrijvingDeelperceel
     */
    protected $kdpomschrijvingDeelperceel = null;

    /**
     * @var KOZKOZGHPbasis $kdpligtBinnen
     */
    protected $kdpligtBinnen = null;

    /**
     * @var KOZKOZAPR-basis[] $aprstaatOp
     */
    protected $aprstaatOp = null;

    /**
     * @var KOZNNP-basis[] $aprheeftVerenigingVanEigenaars
     */
    protected $aprheeftVerenigingVanEigenaars = null;

    /**
     * @var KoopsomGrp $koopsom
     */
    protected $koopsom = null;

    /**
     * @var LandinrichtingsrenteGrp $landinrichtingsRente
     */
    protected $landinrichtingsRente = null;

    /**
     * @var CultuurOnbebouwde $cultuurOnbebouwd
     */
    protected $cultuurOnbebouwd = null;

    /**
     * @var BebouwingCodee $aardBebouwing
     */
    protected $aardBebouwing = null;

    /**
     * @var Booleane $meerCulturen
     */
    protected $meerCulturen = null;

    /**
     * @var Brondocument $brondocument
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
     * @var KOZ-basis[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var KOZ-basis[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var KOZKOZNAR-basis[] $isOvergegaanIn
     */
    protected $isOvergegaanIn = null;

    /**
     * @var KOZKOZVAN-basis[] $isOntstaanUit
     */
    protected $isOntstaanUit = null;

    /**
     * @var KOZKZA-basis[] $heeftAantekening
     */
    protected $heeftAantekening = null;

    /**
     * @var KOZKOZMDL-basis[] $alsHoofdPerceelHeeftMandelige
     */
    protected $alsHoofdPerceelHeeftMandelige = null;

    /**
     * @var KOZRPSVZG-basis[] $heeftAlsVoornaamsteZakelijkGerechtigde
     */
    protected $heeftAlsVoornaamsteZakelijkGerechtigde = null;

    /**
     * @var KOZZKR-basis[] $heeftZakelijkeRechten
     */
    protected $heeftZakelijkeRechten = null;

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
     * @return KadastraleIdentificatiee
     */
    public function getKadastraleIdentificatie()
    {
      return $this->kadastraleIdentificatie;
    }

    /**
     * @param KadastraleIdentificatiee $kadastraleIdentificatie
     * @return KOZ-basis
     */
    public function setKadastraleIdentificatie($kadastraleIdentificatie)
    {
      $this->kadastraleIdentificatie = $kadastraleIdentificatie;
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
     * @return KOZ-basis
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingKOZe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingKOZe $typering
     * @return KOZ-basis
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return KadastraleAanduidingGrp
     */
    public function getKadastraleAanduiding()
    {
      return $this->kadastraleAanduiding;
    }

    /**
     * @param KadastraleAanduidingGrp $kadastraleAanduiding
     * @return KOZ-basis
     */
    public function setKadastraleAanduiding($kadastraleAanduiding)
    {
      $this->kadastraleAanduiding = $kadastraleAanduiding;
      return $this;
    }

    /**
     * @return KadastraleGemeentenaame
     */
    public function getKadastraleGemeentenaam()
    {
      return $this->kadastraleGemeentenaam;
    }

    /**
     * @param KadastraleGemeentenaame $kadastraleGemeentenaam
     * @return KOZ-basis
     */
    public function setKadastraleGemeentenaam($kadastraleGemeentenaam)
    {
      $this->kadastraleGemeentenaam = $kadastraleGemeentenaam;
      return $this;
    }

    /**
     * @return LocatieKOZGrp
     */
    public function getLocatieOnroerendeZaak()
    {
      return $this->locatieOnroerendeZaak;
    }

    /**
     * @param LocatieKOZGrp $locatieOnroerendeZaak
     * @return KOZ-basis
     */
    public function setLocatieOnroerendeZaak($locatieOnroerendeZaak)
    {
      $this->locatieOnroerendeZaak = $locatieOnroerendeZaak;
      return $this;
    }

    /**
     * @return KOZTGO-basis[]
     */
    public function getHoortBij()
    {
      return $this->hoortBij;
    }

    /**
     * @param KOZTGO-basis[] $hoortBij
     * @return KOZ-basis
     */
    public function setHoortBij(array $hoortBij = null)
    {
      $this->hoortBij = $hoortBij;
      return $this;
    }

    /**
     * @return GeometriePunte
     */
    public function getKdpplaatscoordinaten()
    {
      return $this->kdpplaatscoordinaten;
    }

    /**
     * @param GeometriePunte $kdpplaatscoordinaten
     * @return KOZ-basis
     */
    public function setKdpplaatscoordinaten($kdpplaatscoordinaten)
    {
      $this->kdpplaatscoordinaten = $kdpplaatscoordinaten;
      return $this;
    }

    /**
     * @return Maateenheid82nege
     */
    public function getKdpgrootte()
    {
      return $this->kdpgrootte;
    }

    /**
     * @param Maateenheid82nege $kdpgrootte
     * @return KOZ-basis
     */
    public function setKdpgrootte($kdpgrootte)
    {
      $this->kdpgrootte = $kdpgrootte;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getKdpvastgesteldeGrootte()
    {
      return $this->kdpvastgesteldeGrootte;
    }

    /**
     * @param Booleane $kdpvastgesteldeGrootte
     * @return KOZ-basis
     */
    public function setKdpvastgesteldeGrootte($kdpvastgesteldeGrootte)
    {
      $this->kdpvastgesteldeGrootte = $kdpvastgesteldeGrootte;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getKdpbegrenzing()
    {
      return $this->kdpbegrenzing;
    }

    /**
     * @param GeometrieVlake $kdpbegrenzing
     * @return KOZ-basis
     */
    public function setKdpbegrenzing($kdpbegrenzing)
    {
      $this->kdpbegrenzing = $kdpbegrenzing;
      return $this;
    }

    /**
     * @return OmschrijvingDeelperceele
     */
    public function getKdpomschrijvingDeelperceel()
    {
      return $this->kdpomschrijvingDeelperceel;
    }

    /**
     * @param OmschrijvingDeelperceele $kdpomschrijvingDeelperceel
     * @return KOZ-basis
     */
    public function setKdpomschrijvingDeelperceel($kdpomschrijvingDeelperceel)
    {
      $this->kdpomschrijvingDeelperceel = $kdpomschrijvingDeelperceel;
      return $this;
    }

    /**
     * @return KOZKOZGHPbasis
     */
    public function getKdpligtBinnen()
    {
      return $this->kdpligtBinnen;
    }

    /**
     * @param KOZKOZGHPbasis $kdpligtBinnen
     * @return KOZ-basis
     */
    public function setKdpligtBinnen($kdpligtBinnen)
    {
      $this->kdpligtBinnen = $kdpligtBinnen;
      return $this;
    }

    /**
     * @return KOZKOZAPR-basis[]
     */
    public function getAprstaatOp()
    {
      return $this->aprstaatOp;
    }

    /**
     * @param KOZKOZAPR-basis[] $aprstaatOp
     * @return KOZ-basis
     */
    public function setAprstaatOp(array $aprstaatOp = null)
    {
      $this->aprstaatOp = $aprstaatOp;
      return $this;
    }

    /**
     * @return KOZNNP-basis[]
     */
    public function getAprheeftVerenigingVanEigenaars()
    {
      return $this->aprheeftVerenigingVanEigenaars;
    }

    /**
     * @param KOZNNP-basis[] $aprheeftVerenigingVanEigenaars
     * @return KOZ-basis
     */
    public function setAprheeftVerenigingVanEigenaars(array $aprheeftVerenigingVanEigenaars = null)
    {
      $this->aprheeftVerenigingVanEigenaars = $aprheeftVerenigingVanEigenaars;
      return $this;
    }

    /**
     * @return KoopsomGrp
     */
    public function getKoopsom()
    {
      return $this->koopsom;
    }

    /**
     * @param KoopsomGrp $koopsom
     * @return KOZ-basis
     */
    public function setKoopsom($koopsom)
    {
      $this->koopsom = $koopsom;
      return $this;
    }

    /**
     * @return LandinrichtingsrenteGrp
     */
    public function getLandinrichtingsRente()
    {
      return $this->landinrichtingsRente;
    }

    /**
     * @param LandinrichtingsrenteGrp $landinrichtingsRente
     * @return KOZ-basis
     */
    public function setLandinrichtingsRente($landinrichtingsRente)
    {
      $this->landinrichtingsRente = $landinrichtingsRente;
      return $this;
    }

    /**
     * @return CultuurOnbebouwde
     */
    public function getCultuurOnbebouwd()
    {
      return $this->cultuurOnbebouwd;
    }

    /**
     * @param CultuurOnbebouwde $cultuurOnbebouwd
     * @return KOZ-basis
     */
    public function setCultuurOnbebouwd($cultuurOnbebouwd)
    {
      $this->cultuurOnbebouwd = $cultuurOnbebouwd;
      return $this;
    }

    /**
     * @return BebouwingCodee
     */
    public function getAardBebouwing()
    {
      return $this->aardBebouwing;
    }

    /**
     * @param BebouwingCodee $aardBebouwing
     * @return KOZ-basis
     */
    public function setAardBebouwing($aardBebouwing)
    {
      $this->aardBebouwing = $aardBebouwing;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getMeerCulturen()
    {
      return $this->meerCulturen;
    }

    /**
     * @param Booleane $meerCulturen
     * @return KOZ-basis
     */
    public function setMeerCulturen($meerCulturen)
    {
      $this->meerCulturen = $meerCulturen;
      return $this;
    }

    /**
     * @return Brondocument
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param Brondocument $brondocument
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return KOZ-basis[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param KOZ-basis[] $historieMaterieel
     * @return KOZ-basis
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return KOZ-basis[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param KOZ-basis[] $historieFormeel
     * @return KOZ-basis
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return KOZKOZNAR-basis[]
     */
    public function getIsOvergegaanIn()
    {
      return $this->isOvergegaanIn;
    }

    /**
     * @param KOZKOZNAR-basis[] $isOvergegaanIn
     * @return KOZ-basis
     */
    public function setIsOvergegaanIn(array $isOvergegaanIn = null)
    {
      $this->isOvergegaanIn = $isOvergegaanIn;
      return $this;
    }

    /**
     * @return KOZKOZVAN-basis[]
     */
    public function getIsOntstaanUit()
    {
      return $this->isOntstaanUit;
    }

    /**
     * @param KOZKOZVAN-basis[] $isOntstaanUit
     * @return KOZ-basis
     */
    public function setIsOntstaanUit(array $isOntstaanUit = null)
    {
      $this->isOntstaanUit = $isOntstaanUit;
      return $this;
    }

    /**
     * @return KOZKZA-basis[]
     */
    public function getHeeftAantekening()
    {
      return $this->heeftAantekening;
    }

    /**
     * @param KOZKZA-basis[] $heeftAantekening
     * @return KOZ-basis
     */
    public function setHeeftAantekening(array $heeftAantekening = null)
    {
      $this->heeftAantekening = $heeftAantekening;
      return $this;
    }

    /**
     * @return KOZKOZMDL-basis[]
     */
    public function getAlsHoofdPerceelHeeftMandelige()
    {
      return $this->alsHoofdPerceelHeeftMandelige;
    }

    /**
     * @param KOZKOZMDL-basis[] $alsHoofdPerceelHeeftMandelige
     * @return KOZ-basis
     */
    public function setAlsHoofdPerceelHeeftMandelige(array $alsHoofdPerceelHeeftMandelige = null)
    {
      $this->alsHoofdPerceelHeeftMandelige = $alsHoofdPerceelHeeftMandelige;
      return $this;
    }

    /**
     * @return KOZRPSVZG-basis[]
     */
    public function getHeeftAlsVoornaamsteZakelijkGerechtigde()
    {
      return $this->heeftAlsVoornaamsteZakelijkGerechtigde;
    }

    /**
     * @param KOZRPSVZG-basis[] $heeftAlsVoornaamsteZakelijkGerechtigde
     * @return KOZ-basis
     */
    public function setHeeftAlsVoornaamsteZakelijkGerechtigde(array $heeftAlsVoornaamsteZakelijkGerechtigde = null)
    {
      $this->heeftAlsVoornaamsteZakelijkGerechtigde = $heeftAlsVoornaamsteZakelijkGerechtigde;
      return $this;
    }

    /**
     * @return KOZZKR-basis[]
     */
    public function getHeeftZakelijkeRechten()
    {
      return $this->heeftZakelijkeRechten;
    }

    /**
     * @param KOZZKR-basis[] $heeftZakelijkeRechten
     * @return KOZ-basis
     */
    public function setHeeftZakelijkeRechten(array $heeftZakelijkeRechten = null)
    {
      $this->heeftZakelijkeRechten = $heeftZakelijkeRechten;
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
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
     * @return KOZ-basis
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
