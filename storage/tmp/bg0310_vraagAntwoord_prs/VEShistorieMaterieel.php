<?php

namespace RRSVP\Stuf;

class VEShistorieMaterieel
{

    /**
     * @var VestigingsNummere $vestigingsNummer
     */
    protected $vestigingsNummer = null;

    /**
     * @var Handelsnaame $handelsnaam
     */
    protected $handelsnaam = null;

    /**
     * @var HandelsnaamVerkorte $handelsnaamVerkort
     */
    protected $handelsnaamVerkort = null;

    /**
     * @var Maateenheid6e $volgorde
     */
    protected $volgorde = null;

    /**
     * @var ActiviteitGrpZonderVolgorde[] $activiteit
     */
    protected $activiteit = null;

    /**
     * @var TyperingVESe $typeringVestiging
     */
    protected $typeringVestiging = null;

    /**
     * @var VerblijfsadresGrpNNPVEShistorie $verblijfsadres
     */
    protected $verblijfsadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

    /**
     * @var InOnderzoekVES[] $inOnderzoek
     */
    protected $inOnderzoek = null;

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
     * @var VES-historieFormeel[] $historieFormeel
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
     * @return VestigingsNummere
     */
    public function getVestigingsNummer()
    {
      return $this->vestigingsNummer;
    }

    /**
     * @param VestigingsNummere $vestigingsNummer
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setVestigingsNummer($vestigingsNummer)
    {
      $this->vestigingsNummer = $vestigingsNummer;
      return $this;
    }

    /**
     * @return Handelsnaame
     */
    public function getHandelsnaam()
    {
      return $this->handelsnaam;
    }

    /**
     * @param Handelsnaame $handelsnaam
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setHandelsnaam($handelsnaam)
    {
      $this->handelsnaam = $handelsnaam;
      return $this;
    }

    /**
     * @return HandelsnaamVerkorte
     */
    public function getHandelsnaamVerkort()
    {
      return $this->handelsnaamVerkort;
    }

    /**
     * @param HandelsnaamVerkorte $handelsnaamVerkort
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setHandelsnaamVerkort($handelsnaamVerkort)
    {
      $this->handelsnaamVerkort = $handelsnaamVerkort;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getVolgorde()
    {
      return $this->volgorde;
    }

    /**
     * @param Maateenheid6e $volgorde
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setVolgorde($volgorde)
    {
      $this->volgorde = $volgorde;
      return $this;
    }

    /**
     * @return ActiviteitGrpZonderVolgorde[]
     */
    public function getActiviteit()
    {
      return $this->activiteit;
    }

    /**
     * @param ActiviteitGrpZonderVolgorde[] $activiteit
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setActiviteit(array $activiteit = null)
    {
      $this->activiteit = $activiteit;
      return $this;
    }

    /**
     * @return TyperingVESe
     */
    public function getTyperingVestiging()
    {
      return $this->typeringVestiging;
    }

    /**
     * @param TyperingVESe $typeringVestiging
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setTyperingVestiging($typeringVestiging)
    {
      $this->typeringVestiging = $typeringVestiging;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpNNPVEShistorie
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrpNNPVEShistorie $verblijfsadres
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
      return $this;
    }

    /**
     * @return InOnderzoekVES[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekVES[] $inOnderzoek
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setInOnderzoek(array $inOnderzoek = null)
    {
      $this->inOnderzoek = $inOnderzoek;
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return VES-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param VES-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
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
     * @return \RRSVP\Stuf\VES-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
