<?php

namespace RRSVP\Stuf;

class MACgerelateerdeRPSAntwoord
{

    /**
     * @var KvKNummere $kvkNummer
     */
    protected $kvkNummer = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var DatumMetIndicator $datumAanvang
     */
    protected $datumAanvang = null;

    /**
     * @var DatumMetIndicator $datumVoortzetting
     */
    protected $datumVoortzetting = null;

    /**
     * @var DatumMetIndicator $datumEinde
     */
    protected $datumEinde = null;

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
     * @var ActiviteitGrp[] $activiteit
     */
    protected $activiteit = null;

    /**
     * @var InOnderzoekMAC[] $inOnderzoek
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
     * @var MACVES-antwoord[] $oefentActiviteitUitIn
     */
    protected $oefentActiviteitUitIn = null;

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
     * @return KvKNummere
     */
    public function getKvkNummer()
    {
      return $this->kvkNummer;
    }

    /**
     * @param KvKNummere $kvkNummer
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setKvkNummer($kvkNummer)
    {
      $this->kvkNummer = $kvkNummer;
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumAanvang()
    {
      return $this->datumAanvang;
    }

    /**
     * @param DatumMetIndicator $datumAanvang
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setDatumAanvang($datumAanvang)
    {
      $this->datumAanvang = $datumAanvang;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumVoortzetting()
    {
      return $this->datumVoortzetting;
    }

    /**
     * @param DatumMetIndicator $datumVoortzetting
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setDatumVoortzetting($datumVoortzetting)
    {
      $this->datumVoortzetting = $datumVoortzetting;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getDatumEinde()
    {
      return $this->datumEinde;
    }

    /**
     * @param DatumMetIndicator $datumEinde
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setDatumEinde($datumEinde)
    {
      $this->datumEinde = $datumEinde;
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setVolgorde($volgorde)
    {
      $this->volgorde = $volgorde;
      return $this;
    }

    /**
     * @return ActiviteitGrp[]
     */
    public function getActiviteit()
    {
      return $this->activiteit;
    }

    /**
     * @param ActiviteitGrp[] $activiteit
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setActiviteit(array $activiteit = null)
    {
      $this->activiteit = $activiteit;
      return $this;
    }

    /**
     * @return InOnderzoekMAC[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekMAC[] $inOnderzoek
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return MACVES-antwoord[]
     */
    public function getOefentActiviteitUitIn()
    {
      return $this->oefentActiviteitUitIn;
    }

    /**
     * @param MACVES-antwoord[] $oefentActiviteitUitIn
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setOefentActiviteitUitIn(array $oefentActiviteitUitIn = null)
    {
      $this->oefentActiviteitUitIn = $oefentActiviteitUitIn;
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
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
     * @return \RRSVP\Stuf\MAC-gerelateerdeRPSAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
