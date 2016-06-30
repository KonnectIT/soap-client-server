<?php

class KOZgerelateerdeWOZVraagSelectie
{

    /**
     * @var KadastraleIdentificatiee $kadastraleIdentificatie
     */
    protected $kadastraleIdentificatie = null;

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
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var KOZKZAvraagSelectie $heeftAantekening
     */
    protected $heeftAantekening = null;

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
     * @var anonymous82 $scope
     */
    protected $scope = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
     */
    public function setKadastraleIdentificatie($kadastraleIdentificatie)
    {
      $this->kadastraleIdentificatie = $kadastraleIdentificatie;
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
     */
    public function setHeeftAantekening($heeftAantekening)
    {
      $this->heeftAantekening = $heeftAantekening;
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
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
     * @return KOZ-gerelateerdeWOZVraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
