<?php

namespace RRSVP\Stuf;

class NPSkerngegevens
{

    /**
     * @var BSNe $inpbsn
     */
    protected $inpbsn = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var IdentificatieRPSBTLe $anpidentificatie
     */
    protected $anpidentificatie = null;

    /**
     * @var Anummere $inpanummer
     */
    protected $inpanummer = null;

    /**
     * @var Geslachtsnaame $geslachtsnaam
     */
    protected $geslachtsnaam = null;

    /**
     * @var VoorvoegselGeslachtsnaame $voorvoegselGeslachtsnaam
     */
    protected $voorvoegselGeslachtsnaam = null;

    /**
     * @var Voorletterse $voorletters
     */
    protected $voorletters = null;

    /**
     * @var Voornamene $voornamen
     */
    protected $voornamen = null;

    /**
     * @var Geslachtsaanduidinge $geslachtsaanduiding
     */
    protected $geslachtsaanduiding = null;

    /**
     * @var DatumMetIndicator $geboortedatum
     */
    protected $geboortedatum = null;

    /**
     * @var VerblijfsadresGrpkerngegevens $verblijfsadres
     */
    protected $verblijfsadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

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
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     */
    public function __construct($entiteittype, $noValue, $scope)
    {
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->scope = $scope;
    }

    /**
     * @return BSNe
     */
    public function getInpbsn()
    {
      return $this->inpbsn;
    }

    /**
     * @param BSNe $inpbsn
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setInpbsn($inpbsn)
    {
      $this->inpbsn = $inpbsn;
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
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return IdentificatieRPSBTLe
     */
    public function getAnpidentificatie()
    {
      return $this->anpidentificatie;
    }

    /**
     * @param IdentificatieRPSBTLe $anpidentificatie
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setAnpidentificatie($anpidentificatie)
    {
      $this->anpidentificatie = $anpidentificatie;
      return $this;
    }

    /**
     * @return Anummere
     */
    public function getInpanummer()
    {
      return $this->inpanummer;
    }

    /**
     * @param Anummere $inpanummer
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setInpanummer($inpanummer)
    {
      $this->inpanummer = $inpanummer;
      return $this;
    }

    /**
     * @return Geslachtsnaame
     */
    public function getGeslachtsnaam()
    {
      return $this->geslachtsnaam;
    }

    /**
     * @param Geslachtsnaame $geslachtsnaam
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setGeslachtsnaam($geslachtsnaam)
    {
      $this->geslachtsnaam = $geslachtsnaam;
      return $this;
    }

    /**
     * @return VoorvoegselGeslachtsnaame
     */
    public function getVoorvoegselGeslachtsnaam()
    {
      return $this->voorvoegselGeslachtsnaam;
    }

    /**
     * @param VoorvoegselGeslachtsnaame $voorvoegselGeslachtsnaam
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setVoorvoegselGeslachtsnaam($voorvoegselGeslachtsnaam)
    {
      $this->voorvoegselGeslachtsnaam = $voorvoegselGeslachtsnaam;
      return $this;
    }

    /**
     * @return Voorletterse
     */
    public function getVoorletters()
    {
      return $this->voorletters;
    }

    /**
     * @param Voorletterse $voorletters
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setVoorletters($voorletters)
    {
      $this->voorletters = $voorletters;
      return $this;
    }

    /**
     * @return Voornamene
     */
    public function getVoornamen()
    {
      return $this->voornamen;
    }

    /**
     * @param Voornamene $voornamen
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setVoornamen($voornamen)
    {
      $this->voornamen = $voornamen;
      return $this;
    }

    /**
     * @return Geslachtsaanduidinge
     */
    public function getGeslachtsaanduiding()
    {
      return $this->geslachtsaanduiding;
    }

    /**
     * @param Geslachtsaanduidinge $geslachtsaanduiding
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setGeslachtsaanduiding($geslachtsaanduiding)
    {
      $this->geslachtsaanduiding = $geslachtsaanduiding;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getGeboortedatum()
    {
      return $this->geboortedatum;
    }

    /**
     * @param DatumMetIndicator $geboortedatum
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setGeboortedatum($geboortedatum)
    {
      $this->geboortedatum = $geboortedatum;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpkerngegevens
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrpkerngegevens $verblijfsadres
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setVerblijfsadres($verblijfsadres)
    {
      $this->verblijfsadres = $verblijfsadres;
      return $this;
    }

    /**
     * @return VerblijfBuitenlandGrp
     */
    public function getSubverblijfBuitenland()
    {
      return $this->subverblijfBuitenland;
    }

    /**
     * @param VerblijfBuitenlandGrp $subverblijfBuitenland
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
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
     * @return \RRSVP\Stuf\NPS-kerngegevens
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
     * @return \RRSVP\Stuf\NPS-kerngegevens
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
     * @return \RRSVP\Stuf\NPS-kerngegevens
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
