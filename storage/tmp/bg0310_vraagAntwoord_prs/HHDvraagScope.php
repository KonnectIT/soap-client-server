<?php

namespace RRSVP\Stuf;

class HHDvraagScope
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
     * @var HHDTGOvraag $isGehuisvestIn
     */
    protected $isGehuisvestIn = null;

    /**
     * @var HHDNPSvraagScope $heeftAlsLeden
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
     * @return HuishoudenNummere
     */
    public function getNummer()
    {
      return $this->nummer;
    }

    /**
     * @param HuishoudenNummere $nummer
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return HHDTGOvraag
     */
    public function getIsGehuisvestIn()
    {
      return $this->isGehuisvestIn;
    }

    /**
     * @param HHDTGOvraag $isGehuisvestIn
     * @return \RRSVP\Stuf\HHD-vraagScope
     */
    public function setIsGehuisvestIn($isGehuisvestIn)
    {
      $this->isGehuisvestIn = $isGehuisvestIn;
      return $this;
    }

    /**
     * @return HHDNPSvraagScope
     */
    public function getHeeftAlsLeden()
    {
      return $this->heeftAlsLeden;
    }

    /**
     * @param HHDNPSvraagScope $heeftAlsLeden
     * @return \RRSVP\Stuf\HHD-vraagScope
     */
    public function setHeeftAlsLeden($heeftAlsLeden)
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
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
     * @return \RRSVP\Stuf\HHD-vraagScope
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
