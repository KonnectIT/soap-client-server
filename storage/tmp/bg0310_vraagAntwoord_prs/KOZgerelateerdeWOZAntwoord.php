<?php

namespace RRSVP\Stuf;

class KOZgerelateerdeWOZAntwoord
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
     * @var Maateenheid82nege $kdpgrootte
     */
    protected $kdpgrootte = null;

    /**
     * @var Booleane $kdpvastgesteldeGrootte
     */
    protected $kdpvastgesteldeGrootte = null;

    /**
     * @var KoopsomGrp $koopsom
     */
    protected $koopsom = null;

    /**
     * @var BebouwingCodee $aardBebouwing
     */
    protected $aardBebouwing = null;

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
     * @var KOZKZA-antwoord[] $heeftAantekening
     */
    protected $heeftAantekening = null;

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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setKadastraleGemeentenaam($kadastraleGemeentenaam)
    {
      $this->kadastraleGemeentenaam = $kadastraleGemeentenaam;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setKdpvastgesteldeGrootte($kdpvastgesteldeGrootte)
    {
      $this->kdpvastgesteldeGrootte = $kdpvastgesteldeGrootte;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setKoopsom($koopsom)
    {
      $this->koopsom = $koopsom;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setAardBebouwing($aardBebouwing)
    {
      $this->aardBebouwing = $aardBebouwing;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setHeeftAantekening(array $heeftAantekening = null)
    {
      $this->heeftAantekening = $heeftAantekening;
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
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
     * @return \RRSVP\Stuf\KOZ-gerelateerdeWOZAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
