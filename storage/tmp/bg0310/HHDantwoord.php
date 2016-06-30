<?php

class HHDantwoord
{

    /**
     * @var HuishoudenNummere $nummer
     */
    protected $nummer = null;

    /**
     * @var HuishoudenSoorte $soort
     */
    protected $soort = null;

    /**
     * @var HuishoudenGroottee $grootte
     */
    protected $grootte = null;

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
     * @var HHD-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var HHDTGO-antwoord[] $isGehuisvestIn
     */
    protected $isGehuisvestIn = null;

    /**
     * @var HHDNPS-antwoord[] $heeftAlsLeden
     */
    protected $heeftAlsLeden = null;

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
     * @return HuishoudenNummere
     */
    public function getNummer()
    {
      return $this->nummer;
    }

    /**
     * @param HuishoudenNummere $nummer
     * @return HHD-antwoord
     */
    public function setNummer($nummer)
    {
      $this->nummer = $nummer;
      return $this;
    }

    /**
     * @return HuishoudenSoorte
     */
    public function getSoort()
    {
      return $this->soort;
    }

    /**
     * @param HuishoudenSoorte $soort
     * @return HHD-antwoord
     */
    public function setSoort($soort)
    {
      $this->soort = $soort;
      return $this;
    }

    /**
     * @return HuishoudenGroottee
     */
    public function getGrootte()
    {
      return $this->grootte;
    }

    /**
     * @param HuishoudenGroottee $grootte
     * @return HHD-antwoord
     */
    public function setGrootte($grootte)
    {
      $this->grootte = $grootte;
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return HHD-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param HHD-historieMaterieel[] $historieMaterieel
     * @return HHD-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return HHDTGO-antwoord[]
     */
    public function getIsGehuisvestIn()
    {
      return $this->isGehuisvestIn;
    }

    /**
     * @param HHDTGO-antwoord[] $isGehuisvestIn
     * @return HHD-antwoord
     */
    public function setIsGehuisvestIn(array $isGehuisvestIn = null)
    {
      $this->isGehuisvestIn = $isGehuisvestIn;
      return $this;
    }

    /**
     * @return HHDNPS-antwoord[]
     */
    public function getHeeftAlsLeden()
    {
      return $this->heeftAlsLeden;
    }

    /**
     * @param HHDNPS-antwoord[] $heeftAlsLeden
     * @return HHD-antwoord
     */
    public function setHeeftAlsLeden(array $heeftAlsLeden = null)
    {
      $this->heeftAlsLeden = $heeftAlsLeden;
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
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
     * @return HHD-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
