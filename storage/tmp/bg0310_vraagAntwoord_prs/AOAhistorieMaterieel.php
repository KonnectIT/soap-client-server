<?php

namespace RRSVP\Stuf;

class AOAhistorieMaterieel
{

    /**
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var ObjectNummeringe $opridentificatie
     */
    protected $opridentificatie = null;

    /**
     * @var NaamgevingObjecte $goropenbareRuimteNaam
     */
    protected $goropenbareRuimteNaam = null;

    /**
     * @var Huisnummeringe $huisnummer
     */
    protected $huisnummer = null;

    /**
     * @var Huisletteringe $huisletter
     */
    protected $huisletter = null;

    /**
     * @var Huisnummertoevoeginge $huisnummertoevoeging
     */
    protected $huisnummertoevoeging = null;

    /**
     * @var Postcodee $postcode
     */
    protected $postcode = null;

    /**
     * @var Straatnaame $gorstraatnaam
     */
    protected $gorstraatnaam = null;

    /**
     * @var WoonplaatsWaarinGelegenGrp $woonplaatsWaarinGelegen
     */
    protected $woonplaatsWaarinGelegen = null;

    /**
     * @var StatusNaamgevinge $numstatus
     */
    protected $numstatus = null;

    /**
     * @var Indicatiee $numgeconstateerd
     */
    protected $numgeconstateerd = null;

    /**
     * @var InOnderzoekAOA $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBRA $bronDocument
     */
    protected $bronDocument = null;

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
     * @var AOA-historieFormeel[] $historieFormeel
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
     * @return WoonplaatsCoderinge
     */
    public function getWplidentificatie()
    {
      return $this->wplidentificatie;
    }

    /**
     * @param WoonplaatsCoderinge $wplidentificatie
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getWplwoonplaatsNaam()
    {
      return $this->wplwoonplaatsNaam;
    }

    /**
     * @param NaamgevingObjecte $wplwoonplaatsNaam
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
      return $this;
    }

    /**
     * @return ObjectNummeringe
     */
    public function getOpridentificatie()
    {
      return $this->opridentificatie;
    }

    /**
     * @param ObjectNummeringe $opridentificatie
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setOpridentificatie($opridentificatie)
    {
      $this->opridentificatie = $opridentificatie;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getGoropenbareRuimteNaam()
    {
      return $this->goropenbareRuimteNaam;
    }

    /**
     * @param NaamgevingObjecte $goropenbareRuimteNaam
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setGoropenbareRuimteNaam($goropenbareRuimteNaam)
    {
      $this->goropenbareRuimteNaam = $goropenbareRuimteNaam;
      return $this;
    }

    /**
     * @return Huisnummeringe
     */
    public function getHuisnummer()
    {
      return $this->huisnummer;
    }

    /**
     * @param Huisnummeringe $huisnummer
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setHuisnummer($huisnummer)
    {
      $this->huisnummer = $huisnummer;
      return $this;
    }

    /**
     * @return Huisletteringe
     */
    public function getHuisletter()
    {
      return $this->huisletter;
    }

    /**
     * @param Huisletteringe $huisletter
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setHuisletter($huisletter)
    {
      $this->huisletter = $huisletter;
      return $this;
    }

    /**
     * @return Huisnummertoevoeginge
     */
    public function getHuisnummertoevoeging()
    {
      return $this->huisnummertoevoeging;
    }

    /**
     * @param Huisnummertoevoeginge $huisnummertoevoeging
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging)
    {
      $this->huisnummertoevoeging = $huisnummertoevoeging;
      return $this;
    }

    /**
     * @return Postcodee
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param Postcodee $postcode
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return Straatnaame
     */
    public function getGorstraatnaam()
    {
      return $this->gorstraatnaam;
    }

    /**
     * @param Straatnaame $gorstraatnaam
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setGorstraatnaam($gorstraatnaam)
    {
      $this->gorstraatnaam = $gorstraatnaam;
      return $this;
    }

    /**
     * @return WoonplaatsWaarinGelegenGrp
     */
    public function getWoonplaatsWaarinGelegen()
    {
      return $this->woonplaatsWaarinGelegen;
    }

    /**
     * @param WoonplaatsWaarinGelegenGrp $woonplaatsWaarinGelegen
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setWoonplaatsWaarinGelegen($woonplaatsWaarinGelegen)
    {
      $this->woonplaatsWaarinGelegen = $woonplaatsWaarinGelegen;
      return $this;
    }

    /**
     * @return StatusNaamgevinge
     */
    public function getNumstatus()
    {
      return $this->numstatus;
    }

    /**
     * @param StatusNaamgevinge $numstatus
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setNumstatus($numstatus)
    {
      $this->numstatus = $numstatus;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getNumgeconstateerd()
    {
      return $this->numgeconstateerd;
    }

    /**
     * @param Indicatiee $numgeconstateerd
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setNumgeconstateerd($numgeconstateerd)
    {
      $this->numgeconstateerd = $numgeconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekAOA
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekAOA $inOnderzoek
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBRA
     */
    public function getBronDocument()
    {
      return $this->bronDocument;
    }

    /**
     * @param BrondocumentBRA $bronDocument
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setBronDocument($bronDocument)
    {
      $this->bronDocument = $bronDocument;
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return AOA-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param AOA-historieFormeel[] $historieFormeel
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
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
     * @return \RRSVP\Stuf\AOA-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
