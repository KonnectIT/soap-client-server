<?php

class NNPhistorieFormeel
{

    /**
     * @var BSNe $innnnpId
     */
    protected $innnnpId = null;

    /**
     * @var IdentificatieRPSBTLe $annidentificatie
     */
    protected $annidentificatie = null;

    /**
     * @var StatutaireNaame $statutaireNaam
     */
    protected $statutaireNaam = null;

    /**
     * @var Rechtsvorme $innrechtsvorm
     */
    protected $innrechtsvorm = null;

    /**
     * @var StatutaireZetele $innstatutaireZetel
     */
    protected $innstatutaireZetel = null;

    /**
     * @var DatumMetIndicator $datumAanvang
     */
    protected $datumAanvang = null;

    /**
     * @var DatumMetIndicator $inndatumVoortzetting
     */
    protected $inndatumVoortzetting = null;

    /**
     * @var DatumMetIndicator $datumEinde
     */
    protected $datumEinde = null;

    /**
     * @var VerblijfsadresGrpNNPVEShistorie $bezoekadres
     */
    protected $bezoekadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

    /**
     * @var InOnderzoekNNP[] $inOnderzoek
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
     * @var NNP-historieFormeel[] $historieFormeel
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
     * @return BSNe
     */
    public function getInnnnpId()
    {
      return $this->innnnpId;
    }

    /**
     * @param BSNe $innnnpId
     * @return NNP-historieFormeel
     */
    public function setInnnnpId($innnnpId)
    {
      $this->innnnpId = $innnnpId;
      return $this;
    }

    /**
     * @return IdentificatieRPSBTLe
     */
    public function getAnnidentificatie()
    {
      return $this->annidentificatie;
    }

    /**
     * @param IdentificatieRPSBTLe $annidentificatie
     * @return NNP-historieFormeel
     */
    public function setAnnidentificatie($annidentificatie)
    {
      $this->annidentificatie = $annidentificatie;
      return $this;
    }

    /**
     * @return StatutaireNaame
     */
    public function getStatutaireNaam()
    {
      return $this->statutaireNaam;
    }

    /**
     * @param StatutaireNaame $statutaireNaam
     * @return NNP-historieFormeel
     */
    public function setStatutaireNaam($statutaireNaam)
    {
      $this->statutaireNaam = $statutaireNaam;
      return $this;
    }

    /**
     * @return Rechtsvorme
     */
    public function getInnrechtsvorm()
    {
      return $this->innrechtsvorm;
    }

    /**
     * @param Rechtsvorme $innrechtsvorm
     * @return NNP-historieFormeel
     */
    public function setInnrechtsvorm($innrechtsvorm)
    {
      $this->innrechtsvorm = $innrechtsvorm;
      return $this;
    }

    /**
     * @return StatutaireZetele
     */
    public function getInnstatutaireZetel()
    {
      return $this->innstatutaireZetel;
    }

    /**
     * @param StatutaireZetele $innstatutaireZetel
     * @return NNP-historieFormeel
     */
    public function setInnstatutaireZetel($innstatutaireZetel)
    {
      $this->innstatutaireZetel = $innstatutaireZetel;
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
     * @return NNP-historieFormeel
     */
    public function setDatumAanvang($datumAanvang)
    {
      $this->datumAanvang = $datumAanvang;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInndatumVoortzetting()
    {
      return $this->inndatumVoortzetting;
    }

    /**
     * @param DatumMetIndicator $inndatumVoortzetting
     * @return NNP-historieFormeel
     */
    public function setInndatumVoortzetting($inndatumVoortzetting)
    {
      $this->inndatumVoortzetting = $inndatumVoortzetting;
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
     * @return NNP-historieFormeel
     */
    public function setDatumEinde($datumEinde)
    {
      $this->datumEinde = $datumEinde;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpNNPVEShistorie
     */
    public function getBezoekadres()
    {
      return $this->bezoekadres;
    }

    /**
     * @param VerblijfsadresGrpNNPVEShistorie $bezoekadres
     * @return NNP-historieFormeel
     */
    public function setBezoekadres($bezoekadres)
    {
      $this->bezoekadres = $bezoekadres;
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
     * @return NNP-historieFormeel
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
      return $this;
    }

    /**
     * @return InOnderzoekNNP[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNNP[] $inOnderzoek
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NNP-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NNP-historieFormeel[] $historieFormeel
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
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
     * @return NNP-historieFormeel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
