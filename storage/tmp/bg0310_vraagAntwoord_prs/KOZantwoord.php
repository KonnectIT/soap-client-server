<?php

namespace RRSVP\Stuf;

class KOZantwoord
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
     * @var KadastraleAanduidingGrpbasis $kadastraleAanduiding
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
     * @var KOZTGO-antwoord[] $hoortBij
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
     * @var KOZKOZGHPantwoord $kdpligtBinnen
     */
    protected $kdpligtBinnen = null;

    /**
     * @var KOZKOZAPR-antwoord[] $aprstaatOp
     */
    protected $aprstaatOp = null;

    /**
     * @var KOZNNP-antwoord[] $aprheeftVerenigingVanEigenaars
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
     * @var BrondocumentBRK $brondocument
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
     * @var KOZ-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var KOZ-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var KOZKOZNAR-antwoord[] $isOvergegaanIn
     */
    protected $isOvergegaanIn = null;

    /**
     * @var KOZKOZVAN-antwoord[] $isOntstaanUit
     */
    protected $isOntstaanUit = null;

    /**
     * @var KOZKZA-antwoord[] $heeftAantekening
     */
    protected $heeftAantekening = null;

    /**
     * @var KOZKOZMDL-antwoord[] $alsHoofdPerceelHeeftMandelige
     */
    protected $alsHoofdPerceelHeeftMandelige = null;

    /**
     * @var KOZRPSVZG-antwoord[] $heeftAlsVoornaamsteZakelijkGerechtigde
     */
    protected $heeftAlsVoornaamsteZakelijkGerechtigde = null;

    /**
     * @var KOZZKR-antwoord[] $heeftZakelijkeRechten
     */
    protected $heeftZakelijkeRechten = null;

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
     * @return KadastraleIdentificatiee
     */
    public function getKadastraleIdentificatie()
    {
      return $this->kadastraleIdentificatie;
    }

    /**
     * @param KadastraleIdentificatiee $kadastraleIdentificatie
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return KadastraleAanduidingGrpbasis
     */
    public function getKadastraleAanduiding()
    {
      return $this->kadastraleAanduiding;
    }

    /**
     * @param KadastraleAanduidingGrpbasis $kadastraleAanduiding
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setLocatieOnroerendeZaak($locatieOnroerendeZaak)
    {
      $this->locatieOnroerendeZaak = $locatieOnroerendeZaak;
      return $this;
    }

    /**
     * @return KOZTGO-antwoord[]
     */
    public function getHoortBij()
    {
      return $this->hoortBij;
    }

    /**
     * @param KOZTGO-antwoord[] $hoortBij
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setKdpomschrijvingDeelperceel($kdpomschrijvingDeelperceel)
    {
      $this->kdpomschrijvingDeelperceel = $kdpomschrijvingDeelperceel;
      return $this;
    }

    /**
     * @return KOZKOZGHPantwoord
     */
    public function getKdpligtBinnen()
    {
      return $this->kdpligtBinnen;
    }

    /**
     * @param KOZKOZGHPantwoord $kdpligtBinnen
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setKdpligtBinnen($kdpligtBinnen)
    {
      $this->kdpligtBinnen = $kdpligtBinnen;
      return $this;
    }

    /**
     * @return KOZKOZAPR-antwoord[]
     */
    public function getAprstaatOp()
    {
      return $this->aprstaatOp;
    }

    /**
     * @param KOZKOZAPR-antwoord[] $aprstaatOp
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setAprstaatOp(array $aprstaatOp = null)
    {
      $this->aprstaatOp = $aprstaatOp;
      return $this;
    }

    /**
     * @return KOZNNP-antwoord[]
     */
    public function getAprheeftVerenigingVanEigenaars()
    {
      return $this->aprheeftVerenigingVanEigenaars;
    }

    /**
     * @param KOZNNP-antwoord[] $aprheeftVerenigingVanEigenaars
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setMeerCulturen($meerCulturen)
    {
      $this->meerCulturen = $meerCulturen;
      return $this;
    }

    /**
     * @return BrondocumentBRK
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBRK $brondocument
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return KOZ-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param KOZ-historieMaterieel[] $historieMaterieel
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return KOZ-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param KOZ-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return KOZKOZNAR-antwoord[]
     */
    public function getIsOvergegaanIn()
    {
      return $this->isOvergegaanIn;
    }

    /**
     * @param KOZKOZNAR-antwoord[] $isOvergegaanIn
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setIsOvergegaanIn(array $isOvergegaanIn = null)
    {
      $this->isOvergegaanIn = $isOvergegaanIn;
      return $this;
    }

    /**
     * @return KOZKOZVAN-antwoord[]
     */
    public function getIsOntstaanUit()
    {
      return $this->isOntstaanUit;
    }

    /**
     * @param KOZKOZVAN-antwoord[] $isOntstaanUit
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setIsOntstaanUit(array $isOntstaanUit = null)
    {
      $this->isOntstaanUit = $isOntstaanUit;
      return $this;
    }

    /**
     * @return KOZKZA-antwoord[]
     */
    public function getHeeftAantekening()
    {
      return $this->heeftAantekening;
    }

    /**
     * @param KOZKZA-antwoord[] $heeftAantekening
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setHeeftAantekening(array $heeftAantekening = null)
    {
      $this->heeftAantekening = $heeftAantekening;
      return $this;
    }

    /**
     * @return KOZKOZMDL-antwoord[]
     */
    public function getAlsHoofdPerceelHeeftMandelige()
    {
      return $this->alsHoofdPerceelHeeftMandelige;
    }

    /**
     * @param KOZKOZMDL-antwoord[] $alsHoofdPerceelHeeftMandelige
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setAlsHoofdPerceelHeeftMandelige(array $alsHoofdPerceelHeeftMandelige = null)
    {
      $this->alsHoofdPerceelHeeftMandelige = $alsHoofdPerceelHeeftMandelige;
      return $this;
    }

    /**
     * @return KOZRPSVZG-antwoord[]
     */
    public function getHeeftAlsVoornaamsteZakelijkGerechtigde()
    {
      return $this->heeftAlsVoornaamsteZakelijkGerechtigde;
    }

    /**
     * @param KOZRPSVZG-antwoord[] $heeftAlsVoornaamsteZakelijkGerechtigde
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setHeeftAlsVoornaamsteZakelijkGerechtigde(array $heeftAlsVoornaamsteZakelijkGerechtigde = null)
    {
      $this->heeftAlsVoornaamsteZakelijkGerechtigde = $heeftAlsVoornaamsteZakelijkGerechtigde;
      return $this;
    }

    /**
     * @return KOZZKR-antwoord[]
     */
    public function getHeeftZakelijkeRechten()
    {
      return $this->heeftZakelijkeRechten;
    }

    /**
     * @param KOZZKR-antwoord[] $heeftZakelijkeRechten
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
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
     * @return \RRSVP\Stuf\KOZ-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
