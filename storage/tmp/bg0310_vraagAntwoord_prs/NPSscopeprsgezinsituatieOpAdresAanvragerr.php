<?php

namespace RRSVP\Stuf;

class NPSscopeprsgezinsituatieOpAdresAanvragerr
{

    /**
     * @var BSNr $inpbsn
     */
    protected $inpbsn = null;

    /**
     * @var Geslachtsnaamr $geslachtsnaam
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
     * @var Voornamenr $voornamen
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
     * @var Geslachtsaanduidingr $geslachtsaanduiding
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
     * @var VerblijfsadresGrpscopeprsr $verblijfsadres
     */
    protected $verblijfsadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

    /**
     * @var CorrespondentieAdresGrpscopeprsr $subcorrespondentieAdres
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
     * @var AcademischeTitelCodee $acdcode
     */
    protected $acdcode = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var NPSNPSHUWprsr $inpheeftAlsEchtgenootPartner
     */
    protected $inpheeftAlsEchtgenootPartner = null;

    /**
     * @var NPSNPSKNDprsr $inpheeftAlsKinderen
     */
    protected $inpheeftAlsKinderen = null;

    /**
     * @var NPSNPSOUDprsr $inpheeftAlsOuders
     */
    protected $inpheeftAlsOuders = null;

    /**
     * @var NPSNATantwoordprsr $inpheeftAlsNationaliteit
     */
    protected $inpheeftAlsNationaliteit = null;

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
     * @param VerblijfsadresGrpscopeprsr $verblijfsadres
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param Sleutel $sleutelVerzendend
     * @param Sleutel $sleutelOntvangend
     * @param Sleutel $sleutelGegevensbeheer
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($verblijfsadres, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $noValue, $scope, $verwerkingssoort)
    {
      $this->verblijfsadres = $verblijfsadres;
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
     * @return BSNr
     */
    public function getInpbsn()
    {
      return $this->inpbsn;
    }

    /**
     * @param BSNr $inpbsn
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setInpbsn($inpbsn)
    {
      $this->inpbsn = $inpbsn;
      return $this;
    }

    /**
     * @return Geslachtsnaamr
     */
    public function getGeslachtsnaam()
    {
      return $this->geslachtsnaam;
    }

    /**
     * @param Geslachtsnaamr $geslachtsnaam
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setVoorletters($voorletters)
    {
      $this->voorletters = $voorletters;
      return $this;
    }

    /**
     * @return Voornamenr
     */
    public function getVoornamen()
    {
      return $this->voornamen;
    }

    /**
     * @param Voornamenr $voornamen
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setAdellijkeTitelPredikaat($adellijkeTitelPredikaat)
    {
      $this->adellijkeTitelPredikaat = $adellijkeTitelPredikaat;
      return $this;
    }

    /**
     * @return Geslachtsaanduidingr
     */
    public function getGeslachtsaanduiding()
    {
      return $this->geslachtsaanduiding;
    }

    /**
     * @param Geslachtsaanduidingr $geslachtsaanduiding
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setOverlijdensdatum($overlijdensdatum)
    {
      $this->overlijdensdatum = $overlijdensdatum;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpscopeprsr
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrpscopeprsr $verblijfsadres
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpscopeprsr
     */
    public function getSubcorrespondentieAdres()
    {
      return $this->subcorrespondentieAdres;
    }

    /**
     * @param CorrespondentieAdresGrpscopeprsr $subcorrespondentieAdres
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setSubemailadres($subemailadres)
    {
      $this->subemailadres = $subemailadres;
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setAcdcode($acdcode)
    {
      $this->acdcode = $acdcode;
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NPSNPSHUWprsr
     */
    public function getInpheeftAlsEchtgenootPartner()
    {
      return $this->inpheeftAlsEchtgenootPartner;
    }

    /**
     * @param NPSNPSHUWprsr $inpheeftAlsEchtgenootPartner
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setInpheeftAlsEchtgenootPartner($inpheeftAlsEchtgenootPartner)
    {
      $this->inpheeftAlsEchtgenootPartner = $inpheeftAlsEchtgenootPartner;
      return $this;
    }

    /**
     * @return NPSNPSKNDprsr
     */
    public function getInpheeftAlsKinderen()
    {
      return $this->inpheeftAlsKinderen;
    }

    /**
     * @param NPSNPSKNDprsr $inpheeftAlsKinderen
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setInpheeftAlsKinderen($inpheeftAlsKinderen)
    {
      $this->inpheeftAlsKinderen = $inpheeftAlsKinderen;
      return $this;
    }

    /**
     * @return NPSNPSOUDprsr
     */
    public function getInpheeftAlsOuders()
    {
      return $this->inpheeftAlsOuders;
    }

    /**
     * @param NPSNPSOUDprsr $inpheeftAlsOuders
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setInpheeftAlsOuders($inpheeftAlsOuders)
    {
      $this->inpheeftAlsOuders = $inpheeftAlsOuders;
      return $this;
    }

    /**
     * @return NPSNATantwoordprsr
     */
    public function getInpheeftAlsNationaliteit()
    {
      return $this->inpheeftAlsNationaliteit;
    }

    /**
     * @param NPSNATantwoordprsr $inpheeftAlsNationaliteit
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setInpheeftAlsNationaliteit($inpheeftAlsNationaliteit)
    {
      $this->inpheeftAlsNationaliteit = $inpheeftAlsNationaliteit;
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
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
     * @return \RRSVP\Stuf\NPS-scope-prs-gezinsituatieOpAdresAanvrager-r
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
