<?php

namespace RRSVP\Stuf;

class KOZhistorieMaterieel
{

    /**
     * @var KadastraleIdentificatiee $kadastraleIdentificatie
     */
    protected $kadastraleIdentificatie = null;

    /**
     * @var KadastraleAanduidingGrpbasis $kadastraleAanduiding
     */
    protected $kadastraleAanduiding = null;

    /**
     * @var LocatieKOZGrp $locatieOnroerendeZaak
     */
    protected $locatieOnroerendeZaak = null;

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
     * @var KOZ-historieFormeel[] $historieFormeel
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
     * @return KadastraleIdentificatiee
     */
    public function getKadastraleIdentificatie()
    {
      return $this->kadastraleIdentificatie;
    }

    /**
     * @param KadastraleIdentificatiee $kadastraleIdentificatie
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setKadastraleIdentificatie($kadastraleIdentificatie)
    {
      $this->kadastraleIdentificatie = $kadastraleIdentificatie;
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setKadastraleAanduiding($kadastraleAanduiding)
    {
      $this->kadastraleAanduiding = $kadastraleAanduiding;
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setLocatieOnroerendeZaak($locatieOnroerendeZaak)
    {
      $this->locatieOnroerendeZaak = $locatieOnroerendeZaak;
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setKdpomschrijvingDeelperceel($kdpomschrijvingDeelperceel)
    {
      $this->kdpomschrijvingDeelperceel = $kdpomschrijvingDeelperceel;
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
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
     * @return \RRSVP\Stuf\KOZ-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
