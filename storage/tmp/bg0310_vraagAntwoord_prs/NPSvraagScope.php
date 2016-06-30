<?php

namespace RRSVP\Stuf;

class NPSvraagScope
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
     * @var TyperingNPSe $subtypering
     */
    protected $subtypering = null;

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
     * @var AanduidingNaamgebruike $aanduidingNaamgebruik
     */
    protected $aanduidingNaamgebruik = null;

    /**
     * @var Geslachtsnaame $geslachtsnaamPartner
     */
    protected $geslachtsnaamPartner = null;

    /**
     * @var VoorvoegselGeslachtsnaame $voorvoegselGeslachtsnaamPartner
     */
    protected $voorvoegselGeslachtsnaamPartner = null;

    /**
     * @var Aanhefe $aanhefAanschrijving
     */
    protected $aanhefAanschrijving = null;

    /**
     * @var Voornamene $voornamenAanschrijving
     */
    protected $voornamenAanschrijving = null;

    /**
     * @var Geslachtsnaame $geslachtsnaamAanschrijving
     */
    protected $geslachtsnaamAanschrijving = null;

    /**
     * @var AdellijkeTitelPredikaate $adellijkeTitelPredikaat
     */
    protected $adellijkeTitelPredikaat = null;

    /**
     * @var Geslachtsaanduidinge $geslachtsaanduiding
     */
    protected $geslachtsaanduiding = null;

    /**
     * @var DatumMetIndicator $geboortedatum
     */
    protected $geboortedatum = null;

    /**
     * @var Gemeentenaame $inpgeboorteplaats
     */
    protected $inpgeboorteplaats = null;

    /**
     * @var Landcodee $inpgeboorteLand
     */
    protected $inpgeboorteLand = null;

    /**
     * @var DatumMetIndicator $overlijdensdatum
     */
    protected $overlijdensdatum = null;

    /**
     * @var Gemeentenaame $inpoverlijdenplaats
     */
    protected $inpoverlijdenplaats = null;

    /**
     * @var Landcodee $inpoverlijdenLand
     */
    protected $inpoverlijdenLand = null;

    /**
     * @var NPSTGOvraag $inpverblijftIn
     */
    protected $inpverblijftIn = null;

    /**
     * @var VerblijfsadresGrpvraag $verblijfsadres
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
     * @var CorrespondentieAdresGrpvraagScope $subcorrespondentieAdres
     */
    protected $subcorrespondentieAdres = null;

    /**
     * @var Telefoonnummere $subtelefoonnummer
     */
    protected $subtelefoonnummer = null;

    /**
     * @var Telefoonnummere $subfaxnummer
     */
    protected $subfaxnummer = null;

    /**
     * @var Emailadrese $subemailadres
     */
    protected $subemailadres = null;

    /**
     * @var Urle $suburl
     */
    protected $suburl = null;

    /**
     * @var RekeningnummerBankGiroe $subrekeningnummerBankGiro
     */
    protected $subrekeningnummerBankGiro = null;

    /**
     * @var AcademischeTitelCodee $acdcode
     */
    protected $acdcode = null;

    /**
     * @var BurgerlijkeStaate $inpburgerlijkeStaat
     */
    protected $inpburgerlijkeStaat = null;

    /**
     * @var Gemeentecoderinge $inpgemeenteVanInschrijving
     */
    protected $inpgemeenteVanInschrijving = null;

    /**
     * @var DatumMetIndicator $inpdatumInschrijving
     */
    protected $inpdatumInschrijving = null;

    /**
     * @var Verblijfstitelcodee $vbtaanduidingVerblijfstitel
     */
    protected $vbtaanduidingVerblijfstitel = null;

    /**
     * @var DatumMetIndicator $ingdatumVerkrijgingVerblijfstitel
     */
    protected $ingdatumVerkrijgingVerblijfstitel = null;

    /**
     * @var DatumMetIndicator $ingdatumVerliesVerblijfstitel
     */
    protected $ingdatumVerliesVerblijfstitel = null;

    /**
     * @var DatumMetIndicator $inpdatumVestigingInNederland
     */
    protected $inpdatumVestigingInNederland = null;

    /**
     * @var Landcodee $inpimmigratieLand
     */
    protected $inpimmigratieLand = null;

    /**
     * @var DatumMetIndicator $inpdatumVertrekUitNederland
     */
    protected $inpdatumVertrekUitNederland = null;

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
     * @var DatumMetIndicator $inpdatumOpschortingBijhouding
     */
    protected $inpdatumOpschortingBijhouding = null;

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
     * @var InOnderzoekNPSvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     */
    protected $aanduidingStrijdigheidNietigheid = null;

    /**
     * @var BrondocumentNPSvraag $brondocument
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
     * @var NPSNPSHUWvraagScope $inpheeftAlsEchtgenootPartner
     */
    protected $inpheeftAlsEchtgenootPartner = null;

    /**
     * @var NPSNPSKNDvraagScope $inpheeftAlsKinderen
     */
    protected $inpheeftAlsKinderen = null;

    /**
     * @var NPSNPSOUDvraagScope $inpheeftAlsOuders
     */
    protected $inpheeftAlsOuders = null;

    /**
     * @var NPSNATvraag $inpheeftAlsNationaliteit
     */
    protected $inpheeftAlsNationaliteit = null;

    /**
     * @var NPSRSDHDRvraag $ingisHouderVan
     */
    protected $ingisHouderVan = null;

    /**
     * @var NPSRSDBIJvraagScope $ingisBijgeschrevenOp
     */
    protected $ingisBijgeschrevenOp = null;

    /**
     * @var NPSMACvraagScope $rpsisEigenaarVan
     */
    protected $rpsisEigenaarVan = null;

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
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setAnpidentificatie($anpidentificatie)
    {
      $this->anpidentificatie = $anpidentificatie;
      return $this;
    }

    /**
     * @return TyperingNPSe
     */
    public function getSubtypering()
    {
      return $this->subtypering;
    }

    /**
     * @param TyperingNPSe $subtypering
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubtypering($subtypering)
    {
      $this->subtypering = $subtypering;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setVoornamen($voornamen)
    {
      $this->voornamen = $voornamen;
      return $this;
    }

    /**
     * @return AanduidingNaamgebruike
     */
    public function getAanduidingNaamgebruik()
    {
      return $this->aanduidingNaamgebruik;
    }

    /**
     * @param AanduidingNaamgebruike $aanduidingNaamgebruik
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setAanduidingNaamgebruik($aanduidingNaamgebruik)
    {
      $this->aanduidingNaamgebruik = $aanduidingNaamgebruik;
      return $this;
    }

    /**
     * @return Geslachtsnaame
     */
    public function getGeslachtsnaamPartner()
    {
      return $this->geslachtsnaamPartner;
    }

    /**
     * @param Geslachtsnaame $geslachtsnaamPartner
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setGeslachtsnaamPartner($geslachtsnaamPartner)
    {
      $this->geslachtsnaamPartner = $geslachtsnaamPartner;
      return $this;
    }

    /**
     * @return VoorvoegselGeslachtsnaame
     */
    public function getVoorvoegselGeslachtsnaamPartner()
    {
      return $this->voorvoegselGeslachtsnaamPartner;
    }

    /**
     * @param VoorvoegselGeslachtsnaame $voorvoegselGeslachtsnaamPartner
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setVoorvoegselGeslachtsnaamPartner($voorvoegselGeslachtsnaamPartner)
    {
      $this->voorvoegselGeslachtsnaamPartner = $voorvoegselGeslachtsnaamPartner;
      return $this;
    }

    /**
     * @return Aanhefe
     */
    public function getAanhefAanschrijving()
    {
      return $this->aanhefAanschrijving;
    }

    /**
     * @param Aanhefe $aanhefAanschrijving
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setAanhefAanschrijving($aanhefAanschrijving)
    {
      $this->aanhefAanschrijving = $aanhefAanschrijving;
      return $this;
    }

    /**
     * @return Voornamene
     */
    public function getVoornamenAanschrijving()
    {
      return $this->voornamenAanschrijving;
    }

    /**
     * @param Voornamene $voornamenAanschrijving
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setVoornamenAanschrijving($voornamenAanschrijving)
    {
      $this->voornamenAanschrijving = $voornamenAanschrijving;
      return $this;
    }

    /**
     * @return Geslachtsnaame
     */
    public function getGeslachtsnaamAanschrijving()
    {
      return $this->geslachtsnaamAanschrijving;
    }

    /**
     * @param Geslachtsnaame $geslachtsnaamAanschrijving
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setGeslachtsnaamAanschrijving($geslachtsnaamAanschrijving)
    {
      $this->geslachtsnaamAanschrijving = $geslachtsnaamAanschrijving;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setGeboortedatum($geboortedatum)
    {
      $this->geboortedatum = $geboortedatum;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpgeboorteLand($inpgeboorteLand)
    {
      $this->inpgeboorteLand = $inpgeboorteLand;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getOverlijdensdatum()
    {
      return $this->overlijdensdatum;
    }

    /**
     * @param DatumMetIndicator $overlijdensdatum
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setOverlijdensdatum($overlijdensdatum)
    {
      $this->overlijdensdatum = $overlijdensdatum;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpoverlijdenLand($inpoverlijdenLand)
    {
      $this->inpoverlijdenLand = $inpoverlijdenLand;
      return $this;
    }

    /**
     * @return NPSTGOvraag
     */
    public function getInpverblijftIn()
    {
      return $this->inpverblijftIn;
    }

    /**
     * @param NPSTGOvraag $inpverblijftIn
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpverblijftIn($inpverblijftIn)
    {
      $this->inpverblijftIn = $inpverblijftIn;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpvraag
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrpvraag $verblijfsadres
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpadresHerkomst($inpadresHerkomst)
    {
      $this->inpadresHerkomst = $inpadresHerkomst;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpvraagScope
     */
    public function getSubcorrespondentieAdres()
    {
      return $this->subcorrespondentieAdres;
    }

    /**
     * @param CorrespondentieAdresGrpvraagScope $subcorrespondentieAdres
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubcorrespondentieAdres($subcorrespondentieAdres)
    {
      $this->subcorrespondentieAdres = $subcorrespondentieAdres;
      return $this;
    }

    /**
     * @return Telefoonnummere
     */
    public function getSubtelefoonnummer()
    {
      return $this->subtelefoonnummer;
    }

    /**
     * @param Telefoonnummere $subtelefoonnummer
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubtelefoonnummer($subtelefoonnummer)
    {
      $this->subtelefoonnummer = $subtelefoonnummer;
      return $this;
    }

    /**
     * @return Telefoonnummere
     */
    public function getSubfaxnummer()
    {
      return $this->subfaxnummer;
    }

    /**
     * @param Telefoonnummere $subfaxnummer
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubfaxnummer($subfaxnummer)
    {
      $this->subfaxnummer = $subfaxnummer;
      return $this;
    }

    /**
     * @return Emailadrese
     */
    public function getSubemailadres()
    {
      return $this->subemailadres;
    }

    /**
     * @param Emailadrese $subemailadres
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubemailadres($subemailadres)
    {
      $this->subemailadres = $subemailadres;
      return $this;
    }

    /**
     * @return Urle
     */
    public function getSuburl()
    {
      return $this->suburl;
    }

    /**
     * @param Urle $suburl
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSuburl($suburl)
    {
      $this->suburl = $suburl;
      return $this;
    }

    /**
     * @return RekeningnummerBankGiroe
     */
    public function getSubrekeningnummerBankGiro()
    {
      return $this->subrekeningnummerBankGiro;
    }

    /**
     * @param RekeningnummerBankGiroe $subrekeningnummerBankGiro
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setSubrekeningnummerBankGiro($subrekeningnummerBankGiro)
    {
      $this->subrekeningnummerBankGiro = $subrekeningnummerBankGiro;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setAcdcode($acdcode)
    {
      $this->acdcode = $acdcode;
      return $this;
    }

    /**
     * @return BurgerlijkeStaate
     */
    public function getInpburgerlijkeStaat()
    {
      return $this->inpburgerlijkeStaat;
    }

    /**
     * @param BurgerlijkeStaate $inpburgerlijkeStaat
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpburgerlijkeStaat($inpburgerlijkeStaat)
    {
      $this->inpburgerlijkeStaat = $inpburgerlijkeStaat;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpgemeenteVanInschrijving($inpgemeenteVanInschrijving)
    {
      $this->inpgemeenteVanInschrijving = $inpgemeenteVanInschrijving;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumInschrijving()
    {
      return $this->inpdatumInschrijving;
    }

    /**
     * @param DatumMetIndicator $inpdatumInschrijving
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpdatumInschrijving($inpdatumInschrijving)
    {
      $this->inpdatumInschrijving = $inpdatumInschrijving;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setVbtaanduidingVerblijfstitel($vbtaanduidingVerblijfstitel)
    {
      $this->vbtaanduidingVerblijfstitel = $vbtaanduidingVerblijfstitel;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngdatumVerkrijgingVerblijfstitel()
    {
      return $this->ingdatumVerkrijgingVerblijfstitel;
    }

    /**
     * @param DatumMetIndicator $ingdatumVerkrijgingVerblijfstitel
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngdatumVerkrijgingVerblijfstitel($ingdatumVerkrijgingVerblijfstitel)
    {
      $this->ingdatumVerkrijgingVerblijfstitel = $ingdatumVerkrijgingVerblijfstitel;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngdatumVerliesVerblijfstitel()
    {
      return $this->ingdatumVerliesVerblijfstitel;
    }

    /**
     * @param DatumMetIndicator $ingdatumVerliesVerblijfstitel
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngdatumVerliesVerblijfstitel($ingdatumVerliesVerblijfstitel)
    {
      $this->ingdatumVerliesVerblijfstitel = $ingdatumVerliesVerblijfstitel;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumVestigingInNederland()
    {
      return $this->inpdatumVestigingInNederland;
    }

    /**
     * @param DatumMetIndicator $inpdatumVestigingInNederland
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpdatumVestigingInNederland($inpdatumVestigingInNederland)
    {
      $this->inpdatumVestigingInNederland = $inpdatumVestigingInNederland;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpimmigratieLand($inpimmigratieLand)
    {
      $this->inpimmigratieLand = $inpimmigratieLand;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumVertrekUitNederland()
    {
      return $this->inpdatumVertrekUitNederland;
    }

    /**
     * @param DatumMetIndicator $inpdatumVertrekUitNederland
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpdatumVertrekUitNederland($inpdatumVertrekUitNederland)
    {
      $this->inpdatumVertrekUitNederland = $inpdatumVertrekUitNederland;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngindicatieCurateleRegister($ingindicatieCurateleRegister)
    {
      $this->ingindicatieCurateleRegister = $ingindicatieCurateleRegister;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getInpdatumOpschortingBijhouding()
    {
      return $this->inpdatumOpschortingBijhouding;
    }

    /**
     * @param DatumMetIndicator $inpdatumOpschortingBijhouding
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpdatumOpschortingBijhouding($inpdatumOpschortingBijhouding)
    {
      $this->inpdatumOpschortingBijhouding = $inpdatumOpschortingBijhouding;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngindicatieBlokkering($ingindicatieBlokkering)
    {
      $this->ingindicatieBlokkering = $ingindicatieBlokkering;
      return $this;
    }

    /**
     * @return InOnderzoekNPSvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNPSvraag $inOnderzoek
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return AanduidingStrijdigheidNietigheidvraag
     */
    public function getAanduidingStrijdigheidNietigheid()
    {
      return $this->aanduidingStrijdigheidNietigheid;
    }

    /**
     * @param AanduidingStrijdigheidNietigheidvraag $aanduidingStrijdigheidNietigheid
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setAanduidingStrijdigheidNietigheid($aanduidingStrijdigheidNietigheid)
    {
      $this->aanduidingStrijdigheidNietigheid = $aanduidingStrijdigheidNietigheid;
      return $this;
    }

    /**
     * @return BrondocumentNPSvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentNPSvraag $brondocument
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setBrondocument($brondocument)
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPSNPSHUWvraagScope
     */
    public function getInpheeftAlsEchtgenootPartner()
    {
      return $this->inpheeftAlsEchtgenootPartner;
    }

    /**
     * @param NPSNPSHUWvraagScope $inpheeftAlsEchtgenootPartner
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpheeftAlsEchtgenootPartner($inpheeftAlsEchtgenootPartner)
    {
      $this->inpheeftAlsEchtgenootPartner = $inpheeftAlsEchtgenootPartner;
      return $this;
    }

    /**
     * @return NPSNPSKNDvraagScope
     */
    public function getInpheeftAlsKinderen()
    {
      return $this->inpheeftAlsKinderen;
    }

    /**
     * @param NPSNPSKNDvraagScope $inpheeftAlsKinderen
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpheeftAlsKinderen($inpheeftAlsKinderen)
    {
      $this->inpheeftAlsKinderen = $inpheeftAlsKinderen;
      return $this;
    }

    /**
     * @return NPSNPSOUDvraagScope
     */
    public function getInpheeftAlsOuders()
    {
      return $this->inpheeftAlsOuders;
    }

    /**
     * @param NPSNPSOUDvraagScope $inpheeftAlsOuders
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpheeftAlsOuders($inpheeftAlsOuders)
    {
      $this->inpheeftAlsOuders = $inpheeftAlsOuders;
      return $this;
    }

    /**
     * @return NPSNATvraag
     */
    public function getInpheeftAlsNationaliteit()
    {
      return $this->inpheeftAlsNationaliteit;
    }

    /**
     * @param NPSNATvraag $inpheeftAlsNationaliteit
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setInpheeftAlsNationaliteit($inpheeftAlsNationaliteit)
    {
      $this->inpheeftAlsNationaliteit = $inpheeftAlsNationaliteit;
      return $this;
    }

    /**
     * @return NPSRSDHDRvraag
     */
    public function getIngisHouderVan()
    {
      return $this->ingisHouderVan;
    }

    /**
     * @param NPSRSDHDRvraag $ingisHouderVan
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngisHouderVan($ingisHouderVan)
    {
      $this->ingisHouderVan = $ingisHouderVan;
      return $this;
    }

    /**
     * @return NPSRSDBIJvraagScope
     */
    public function getIngisBijgeschrevenOp()
    {
      return $this->ingisBijgeschrevenOp;
    }

    /**
     * @param NPSRSDBIJvraagScope $ingisBijgeschrevenOp
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setIngisBijgeschrevenOp($ingisBijgeschrevenOp)
    {
      $this->ingisBijgeschrevenOp = $ingisBijgeschrevenOp;
      return $this;
    }

    /**
     * @return NPSMACvraagScope
     */
    public function getRpsisEigenaarVan()
    {
      return $this->rpsisEigenaarVan;
    }

    /**
     * @param NPSMACvraagScope $rpsisEigenaarVan
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setRpsisEigenaarVan($rpsisEigenaarVan)
    {
      $this->rpsisEigenaarVan = $rpsisEigenaarVan;
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
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
     * @return \RRSVP\Stuf\NPS-vraagScope
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
