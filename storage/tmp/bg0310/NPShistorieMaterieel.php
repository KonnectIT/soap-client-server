<?php

class NPShistorieMaterieel
{

    /**
     * @var BSNe $inpbsn
     */
    protected $inpbsn = null;

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
     * @var Voornamene $voornamen
     */
    protected $voornamen = null;

    /**
     * @var AdellijkeTitelPredikaate $adellijkeTitelPredikaat
     */
    protected $adellijkeTitelPredikaat = null;

    /**
     * @var Geslachtsaanduidinge $geslachtsaanduiding
     */
    protected $geslachtsaanduiding = null;

    /**
     * @var Gemeentenaame $inpgeboorteplaats
     */
    protected $inpgeboorteplaats = null;

    /**
     * @var Landcodee $inpgeboorteLand
     */
    protected $inpgeboorteLand = null;

    /**
     * @var Gemeentenaame $inpoverlijdenplaats
     */
    protected $inpoverlijdenplaats = null;

    /**
     * @var Landcodee $inpoverlijdenLand
     */
    protected $inpoverlijdenLand = null;

    /**
     * @var VerblijfsadresGrphistorie $verblijfsadres
     */
    protected $verblijfsadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

    /**
     * @var AdresHerkomste $inpadresHerkomst
     */
    protected $inpadresHerkomst = null;

    /**
     * @var CorrespondentieAdresGrphistorie $subcorrespondentieAdres
     */
    protected $subcorrespondentieAdres = null;

    /**
     * @var AcademischeTitelCodee $acdcode
     */
    protected $acdcode = null;

    /**
     * @var Gemeentecoderinge $inpgemeenteVanInschrijving
     */
    protected $inpgemeenteVanInschrijving = null;

    /**
     * @var Verblijfstitelcodee $vbtaanduidingVerblijfstitel
     */
    protected $vbtaanduidingVerblijfstitel = null;

    /**
     * @var Landcodee $inpimmigratieLand
     */
    protected $inpimmigratieLand = null;

    /**
     * @var Landcodee $inpemigratieLand
     */
    protected $inpemigratieLand = null;

    /**
     * @var SignaleringGBAe $inpsignaleringReisdocument
     */
    protected $inpsignaleringReisdocument = null;

    /**
     * @var AanduidingBijzonderNederlanderschape $inpaanduidingBijzonderNederlanderschap
     */
    protected $inpaanduidingBijzonderNederlanderschap = null;

    /**
     * @var SignaleringGBAe $inpbuitenlandsReisdocument
     */
    protected $inpbuitenlandsReisdocument = null;

    /**
     * @var AanduidingEuropeesKiesrechte $ingaanduidingEuropeesKiesrecht
     */
    protected $ingaanduidingEuropeesKiesrecht = null;

    /**
     * @var AanduidingUitgeslotenKiesrechte $ingaanduidingUitgeslotenKiesrecht
     */
    protected $ingaanduidingUitgeslotenKiesrecht = null;

    /**
     * @var IndicatieGezage $ingindicatieGezagMinderjarige
     */
    protected $ingindicatieGezagMinderjarige = null;

    /**
     * @var IndicatieCuratelee $ingindicatieCurateleRegister
     */
    protected $ingindicatieCurateleRegister = null;

    /**
     * @var RedenOpschortingBijhoudinge $inpredenOpschortingBijhouding
     */
    protected $inpredenOpschortingBijhouding = null;

    /**
     * @var IndicatieGeheime $inpindicatieGeheim
     */
    protected $inpindicatieGeheim = null;

    /**
     * @var Indicatiee $ingindicatieBlokkering
     */
    protected $ingindicatieBlokkering = null;

    /**
     * @var InOnderzoekNPS[] $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidNPS[] $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNPS[] $brondocument
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
     * @var NPS-historieFormeel[] $historieFormeel
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
    public function getInpbsn()
    {
      return $this->inpbsn;
    }

    /**
     * @param BSNe $inpbsn
     * @return NPS-historieMaterieel
     */
    public function setInpbsn($inpbsn)
    {
      $this->inpbsn = $inpbsn;
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
     */
    public function setVoorvoegselGeslachtsnaam($voorvoegselGeslachtsnaam)
    {
      $this->voorvoegselGeslachtsnaam = $voorvoegselGeslachtsnaam;
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
     * @return NPS-historieMaterieel
     */
    public function setVoornamen($voornamen)
    {
      $this->voornamen = $voornamen;
      return $this;
    }

    /**
     * @return AdellijkeTitelPredikaate
     */
    public function getAdellijkeTitelPredikaat()
    {
      return $this->adellijkeTitelPredikaat;
    }

    /**
     * @param AdellijkeTitelPredikaate $adellijkeTitelPredikaat
     * @return NPS-historieMaterieel
     */
    public function setAdellijkeTitelPredikaat($adellijkeTitelPredikaat)
    {
      $this->adellijkeTitelPredikaat = $adellijkeTitelPredikaat;
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
     * @return NPS-historieMaterieel
     */
    public function setGeslachtsaanduiding($geslachtsaanduiding)
    {
      $this->geslachtsaanduiding = $geslachtsaanduiding;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getInpgeboorteplaats()
    {
      return $this->inpgeboorteplaats;
    }

    /**
     * @param Gemeentenaame $inpgeboorteplaats
     * @return NPS-historieMaterieel
     */
    public function setInpgeboorteplaats($inpgeboorteplaats)
    {
      $this->inpgeboorteplaats = $inpgeboorteplaats;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getInpgeboorteLand()
    {
      return $this->inpgeboorteLand;
    }

    /**
     * @param Landcodee $inpgeboorteLand
     * @return NPS-historieMaterieel
     */
    public function setInpgeboorteLand($inpgeboorteLand)
    {
      $this->inpgeboorteLand = $inpgeboorteLand;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getInpoverlijdenplaats()
    {
      return $this->inpoverlijdenplaats;
    }

    /**
     * @param Gemeentenaame $inpoverlijdenplaats
     * @return NPS-historieMaterieel
     */
    public function setInpoverlijdenplaats($inpoverlijdenplaats)
    {
      $this->inpoverlijdenplaats = $inpoverlijdenplaats;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getInpoverlijdenLand()
    {
      return $this->inpoverlijdenLand;
    }

    /**
     * @param Landcodee $inpoverlijdenLand
     * @return NPS-historieMaterieel
     */
    public function setInpoverlijdenLand($inpoverlijdenLand)
    {
      $this->inpoverlijdenLand = $inpoverlijdenLand;
      return $this;
    }

    /**
     * @return VerblijfsadresGrphistorie
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrphistorie $verblijfsadres
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
      return $this;
    }

    /**
     * @return AdresHerkomste
     */
    public function getInpadresHerkomst()
    {
      return $this->inpadresHerkomst;
    }

    /**
     * @param AdresHerkomste $inpadresHerkomst
     * @return NPS-historieMaterieel
     */
    public function setInpadresHerkomst($inpadresHerkomst)
    {
      $this->inpadresHerkomst = $inpadresHerkomst;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrphistorie
     */
    public function getSubcorrespondentieAdres()
    {
      return $this->subcorrespondentieAdres;
    }

    /**
     * @param CorrespondentieAdresGrphistorie $subcorrespondentieAdres
     * @return NPS-historieMaterieel
     */
    public function setSubcorrespondentieAdres($subcorrespondentieAdres)
    {
      $this->subcorrespondentieAdres = $subcorrespondentieAdres;
      return $this;
    }

    /**
     * @return AcademischeTitelCodee
     */
    public function getAcdcode()
    {
      return $this->acdcode;
    }

    /**
     * @param AcademischeTitelCodee $acdcode
     * @return NPS-historieMaterieel
     */
    public function setAcdcode($acdcode)
    {
      $this->acdcode = $acdcode;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getInpgemeenteVanInschrijving()
    {
      return $this->inpgemeenteVanInschrijving;
    }

    /**
     * @param Gemeentecoderinge $inpgemeenteVanInschrijving
     * @return NPS-historieMaterieel
     */
    public function setInpgemeenteVanInschrijving($inpgemeenteVanInschrijving)
    {
      $this->inpgemeenteVanInschrijving = $inpgemeenteVanInschrijving;
      return $this;
    }

    /**
     * @return Verblijfstitelcodee
     */
    public function getVbtaanduidingVerblijfstitel()
    {
      return $this->vbtaanduidingVerblijfstitel;
    }

    /**
     * @param Verblijfstitelcodee $vbtaanduidingVerblijfstitel
     * @return NPS-historieMaterieel
     */
    public function setVbtaanduidingVerblijfstitel($vbtaanduidingVerblijfstitel)
    {
      $this->vbtaanduidingVerblijfstitel = $vbtaanduidingVerblijfstitel;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getInpimmigratieLand()
    {
      return $this->inpimmigratieLand;
    }

    /**
     * @param Landcodee $inpimmigratieLand
     * @return NPS-historieMaterieel
     */
    public function setInpimmigratieLand($inpimmigratieLand)
    {
      $this->inpimmigratieLand = $inpimmigratieLand;
      return $this;
    }

    /**
     * @return Landcodee
     */
    public function getInpemigratieLand()
    {
      return $this->inpemigratieLand;
    }

    /**
     * @param Landcodee $inpemigratieLand
     * @return NPS-historieMaterieel
     */
    public function setInpemigratieLand($inpemigratieLand)
    {
      $this->inpemigratieLand = $inpemigratieLand;
      return $this;
    }

    /**
     * @return SignaleringGBAe
     */
    public function getInpsignaleringReisdocument()
    {
      return $this->inpsignaleringReisdocument;
    }

    /**
     * @param SignaleringGBAe $inpsignaleringReisdocument
     * @return NPS-historieMaterieel
     */
    public function setInpsignaleringReisdocument($inpsignaleringReisdocument)
    {
      $this->inpsignaleringReisdocument = $inpsignaleringReisdocument;
      return $this;
    }

    /**
     * @return AanduidingBijzonderNederlanderschape
     */
    public function getInpaanduidingBijzonderNederlanderschap()
    {
      return $this->inpaanduidingBijzonderNederlanderschap;
    }

    /**
     * @param AanduidingBijzonderNederlanderschape $inpaanduidingBijzonderNederlanderschap
     * @return NPS-historieMaterieel
     */
    public function setInpaanduidingBijzonderNederlanderschap($inpaanduidingBijzonderNederlanderschap)
    {
      $this->inpaanduidingBijzonderNederlanderschap = $inpaanduidingBijzonderNederlanderschap;
      return $this;
    }

    /**
     * @return SignaleringGBAe
     */
    public function getInpbuitenlandsReisdocument()
    {
      return $this->inpbuitenlandsReisdocument;
    }

    /**
     * @param SignaleringGBAe $inpbuitenlandsReisdocument
     * @return NPS-historieMaterieel
     */
    public function setInpbuitenlandsReisdocument($inpbuitenlandsReisdocument)
    {
      $this->inpbuitenlandsReisdocument = $inpbuitenlandsReisdocument;
      return $this;
    }

    /**
     * @return AanduidingEuropeesKiesrechte
     */
    public function getIngaanduidingEuropeesKiesrecht()
    {
      return $this->ingaanduidingEuropeesKiesrecht;
    }

    /**
     * @param AanduidingEuropeesKiesrechte $ingaanduidingEuropeesKiesrecht
     * @return NPS-historieMaterieel
     */
    public function setIngaanduidingEuropeesKiesrecht($ingaanduidingEuropeesKiesrecht)
    {
      $this->ingaanduidingEuropeesKiesrecht = $ingaanduidingEuropeesKiesrecht;
      return $this;
    }

    /**
     * @return AanduidingUitgeslotenKiesrechte
     */
    public function getIngaanduidingUitgeslotenKiesrecht()
    {
      return $this->ingaanduidingUitgeslotenKiesrecht;
    }

    /**
     * @param AanduidingUitgeslotenKiesrechte $ingaanduidingUitgeslotenKiesrecht
     * @return NPS-historieMaterieel
     */
    public function setIngaanduidingUitgeslotenKiesrecht($ingaanduidingUitgeslotenKiesrecht)
    {
      $this->ingaanduidingUitgeslotenKiesrecht = $ingaanduidingUitgeslotenKiesrecht;
      return $this;
    }

    /**
     * @return IndicatieGezage
     */
    public function getIngindicatieGezagMinderjarige()
    {
      return $this->ingindicatieGezagMinderjarige;
    }

    /**
     * @param IndicatieGezage $ingindicatieGezagMinderjarige
     * @return NPS-historieMaterieel
     */
    public function setIngindicatieGezagMinderjarige($ingindicatieGezagMinderjarige)
    {
      $this->ingindicatieGezagMinderjarige = $ingindicatieGezagMinderjarige;
      return $this;
    }

    /**
     * @return IndicatieCuratelee
     */
    public function getIngindicatieCurateleRegister()
    {
      return $this->ingindicatieCurateleRegister;
    }

    /**
     * @param IndicatieCuratelee $ingindicatieCurateleRegister
     * @return NPS-historieMaterieel
     */
    public function setIngindicatieCurateleRegister($ingindicatieCurateleRegister)
    {
      $this->ingindicatieCurateleRegister = $ingindicatieCurateleRegister;
      return $this;
    }

    /**
     * @return RedenOpschortingBijhoudinge
     */
    public function getInpredenOpschortingBijhouding()
    {
      return $this->inpredenOpschortingBijhouding;
    }

    /**
     * @param RedenOpschortingBijhoudinge $inpredenOpschortingBijhouding
     * @return NPS-historieMaterieel
     */
    public function setInpredenOpschortingBijhouding($inpredenOpschortingBijhouding)
    {
      $this->inpredenOpschortingBijhouding = $inpredenOpschortingBijhouding;
      return $this;
    }

    /**
     * @return IndicatieGeheime
     */
    public function getInpindicatieGeheim()
    {
      return $this->inpindicatieGeheim;
    }

    /**
     * @param IndicatieGeheime $inpindicatieGeheim
     * @return NPS-historieMaterieel
     */
    public function setInpindicatieGeheim($inpindicatieGeheim)
    {
      $this->inpindicatieGeheim = $inpindicatieGeheim;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getIngindicatieBlokkering()
    {
      return $this->ingindicatieBlokkering;
    }

    /**
     * @param Indicatiee $ingindicatieBlokkering
     * @return NPS-historieMaterieel
     */
    public function setIngindicatieBlokkering($ingindicatieBlokkering)
    {
      $this->ingindicatieBlokkering = $ingindicatieBlokkering;
      return $this;
    }

    /**
     * @return InOnderzoekNPS[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNPS[] $inOnderzoek
     * @return NPS-historieMaterieel
     */
    public function setInOnderzoek(array $inOnderzoek = null)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheidNPS[]
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheidNPS[] $aanduidingStrijdigheidNietigheid
     * @return NPS-historieMaterieel
     */
    public function setAanduidingStrijdigheidNietigheid(array $aanduidingStrijdigheidNietigheid = null)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNPS[]
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNPS[] $brondocument
     * @return NPS-historieMaterieel
     */
    public function setBrondocument(array $brondocument = null)
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPS-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NPS-historieFormeel[] $historieFormeel
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
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
     * @return NPS-historieMaterieel
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
