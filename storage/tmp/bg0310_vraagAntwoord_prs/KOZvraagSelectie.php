<?php

namespace RRSVP\Stuf;

class KOZvraagSelectie
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
     * @var KOZTGOvraag $hoortBij
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
     * @var KOZKOZGHPvraagSelectie $kdpligtBinnen
     */
    protected $kdpligtBinnen = null;

    /**
     * @var KOZKOZAPRvraagSelectie $aprstaatOp
     */
    protected $aprstaatOp = null;

    /**
     * @var KOZNNPvraagSelectie $aprheeftVerenigingVanEigenaars
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
     * @var BrondocumentBRKvraag $brondocument
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
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var KOZKOZNARvraagSelectie $isOvergegaanIn
     */
    protected $isOvergegaanIn = null;

    /**
     * @var KOZKOZVANvraagSelectie $isOntstaanUit
     */
    protected $isOntstaanUit = null;

    /**
     * @var KOZKZAvraagSelectie $heeftAantekening
     */
    protected $heeftAantekening = null;

    /**
     * @var KOZKOZMDLvraagSelectie $alsHoofdPerceelHeeftMandelige
     */
    protected $alsHoofdPerceelHeeftMandelige = null;

    /**
     * @var KOZRPSVZGvraagSelectie $heeftAlsVoornaamsteZakelijkGerechtigde
     */
    protected $heeftAlsVoornaamsteZakelijkGerechtigde = null;

    /**
     * @var KOZZKRvraagSelectie $heeftZakelijkeRechten
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
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setLocatieOnroerendeZaak($locatieOnroerendeZaak)
    {
      $this->locatieOnroerendeZaak = $locatieOnroerendeZaak;
      return $this;
    }

    /**
     * @return KOZTGOvraag
     */
    public function getHoortBij()
    {
      return $this->hoortBij;
    }

    /**
     * @param KOZTGOvraag $hoortBij
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setHoortBij($hoortBij)
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setKdpomschrijvingDeelperceel($kdpomschrijvingDeelperceel)
    {
      $this->kdpomschrijvingDeelperceel = $kdpomschrijvingDeelperceel;
      return $this;
    }

    /**
     * @return KOZKOZGHPvraagSelectie
     */
    public function getKdpligtBinnen()
    {
      return $this->kdpligtBinnen;
    }

    /**
     * @param KOZKOZGHPvraagSelectie $kdpligtBinnen
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setKdpligtBinnen($kdpligtBinnen)
    {
      $this->kdpligtBinnen = $kdpligtBinnen;
      return $this;
    }

    /**
     * @return KOZKOZAPRvraagSelectie
     */
    public function getAprstaatOp()
    {
      return $this->aprstaatOp;
    }

    /**
     * @param KOZKOZAPRvraagSelectie $aprstaatOp
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setAprstaatOp($aprstaatOp)
    {
      $this->aprstaatOp = $aprstaatOp;
      return $this;
    }

    /**
     * @return KOZNNPvraagSelectie
     */
    public function getAprheeftVerenigingVanEigenaars()
    {
      return $this->aprheeftVerenigingVanEigenaars;
    }

    /**
     * @param KOZNNPvraagSelectie $aprheeftVerenigingVanEigenaars
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setAprheeftVerenigingVanEigenaars($aprheeftVerenigingVanEigenaars)
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setMeerCulturen($meerCulturen)
    {
      $this->meerCulturen = $meerCulturen;
      return $this;
    }

    /**
     * @return BrondocumentBRKvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBRKvraag $brondocument
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setTijdvakGeldigheid($tijdvakGeldigheid)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return KOZKOZNARvraagSelectie
     */
    public function getIsOvergegaanIn()
    {
      return $this->isOvergegaanIn;
    }

    /**
     * @param KOZKOZNARvraagSelectie $isOvergegaanIn
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setIsOvergegaanIn($isOvergegaanIn)
    {
      $this->isOvergegaanIn = $isOvergegaanIn;
      return $this;
    }

    /**
     * @return KOZKOZVANvraagSelectie
     */
    public function getIsOntstaanUit()
    {
      return $this->isOntstaanUit;
    }

    /**
     * @param KOZKOZVANvraagSelectie $isOntstaanUit
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setIsOntstaanUit($isOntstaanUit)
    {
      $this->isOntstaanUit = $isOntstaanUit;
      return $this;
    }

    /**
     * @return KOZKZAvraagSelectie
     */
    public function getHeeftAantekening()
    {
      return $this->heeftAantekening;
    }

    /**
     * @param KOZKZAvraagSelectie $heeftAantekening
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setHeeftAantekening($heeftAantekening)
    {
      $this->heeftAantekening = $heeftAantekening;
      return $this;
    }

    /**
     * @return KOZKOZMDLvraagSelectie
     */
    public function getAlsHoofdPerceelHeeftMandelige()
    {
      return $this->alsHoofdPerceelHeeftMandelige;
    }

    /**
     * @param KOZKOZMDLvraagSelectie $alsHoofdPerceelHeeftMandelige
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setAlsHoofdPerceelHeeftMandelige($alsHoofdPerceelHeeftMandelige)
    {
      $this->alsHoofdPerceelHeeftMandelige = $alsHoofdPerceelHeeftMandelige;
      return $this;
    }

    /**
     * @return KOZRPSVZGvraagSelectie
     */
    public function getHeeftAlsVoornaamsteZakelijkGerechtigde()
    {
      return $this->heeftAlsVoornaamsteZakelijkGerechtigde;
    }

    /**
     * @param KOZRPSVZGvraagSelectie $heeftAlsVoornaamsteZakelijkGerechtigde
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setHeeftAlsVoornaamsteZakelijkGerechtigde($heeftAlsVoornaamsteZakelijkGerechtigde)
    {
      $this->heeftAlsVoornaamsteZakelijkGerechtigde = $heeftAlsVoornaamsteZakelijkGerechtigde;
      return $this;
    }

    /**
     * @return KOZZKRvraagSelectie
     */
    public function getHeeftZakelijkeRechten()
    {
      return $this->heeftZakelijkeRechten;
    }

    /**
     * @param KOZZKRvraagSelectie $heeftZakelijkeRechten
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setHeeftZakelijkeRechten($heeftZakelijkeRechten)
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZ-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
