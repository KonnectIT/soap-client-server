<?php

class NNPvraagScope
{

    /**
     * @var BSNe $innnnpId
     */
    protected $innnnpId = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var IdentificatieRPSBTLe $annidentificatie
     */
    protected $annidentificatie = null;

    /**
     * @var TyperingNNPe $subtypering
     */
    protected $subtypering = null;

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
     * @var CorrespondentieAdresGrpvraagScope $subcorrespondentieAdres
     */
    protected $subcorrespondentieAdres = null;

    /**
     * @var VerblijfsadresGrpNNPVESvraag $bezoekadres
     */
    protected $bezoekadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

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
     * @var InOnderzoekNNPvraag $inOnderzoek
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
     * @var NNPRPSvraagScope $innheeftAlsFunctionaris
     */
    protected $innheeftAlsFunctionaris = null;

    /**
     * @var NNPMACvraagScope $rpsisEigenaarVan
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
    public function getInnnnpId()
    {
      return $this->innnnpId;
    }

    /**
     * @param BSNe $innnnpId
     * @return NNP-vraagScope
     */
    public function setInnnnpId($innnnpId)
    {
      $this->innnnpId = $innnnpId;
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
     * @return NNP-vraagScope
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return NNP-vraagScope
     */
    public function setAnnidentificatie($annidentificatie)
    {
      $this->annidentificatie = $annidentificatie;
      return $this;
    }

    /**
     * @return TyperingNNPe
     */
    public function getSubtypering()
    {
      return $this->subtypering;
    }

    /**
     * @param TyperingNNPe $subtypering
     * @return NNP-vraagScope
     */
    public function setSubtypering($subtypering)
    {
      $this->subtypering = $subtypering;
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
     */
    public function setDatumEinde($datumEinde)
    {
      $this->datumEinde = $datumEinde;
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
     * @return NNP-vraagScope
     */
    public function setSubcorrespondentieAdres($subcorrespondentieAdres)
    {
      $this->subcorrespondentieAdres = $subcorrespondentieAdres;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpNNPVESvraag
     */
    public function getBezoekadres()
    {
      return $this->bezoekadres;
    }

    /**
     * @param VerblijfsadresGrpNNPVESvraag $bezoekadres
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
     */
    public function setSubrekeningnummerBankGiro($subrekeningnummerBankGiro)
    {
      $this->subrekeningnummerBankGiro = $subrekeningnummerBankGiro;
      return $this;
    }

    /**
     * @return InOnderzoekNNPvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNNPvraag $inOnderzoek
     * @return NNP-vraagScope
     */
    public function setInOnderzoek($inOnderzoek)
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NNPRPSvraagScope
     */
    public function getInnheeftAlsFunctionaris()
    {
      return $this->innheeftAlsFunctionaris;
    }

    /**
     * @param NNPRPSvraagScope $innheeftAlsFunctionaris
     * @return NNP-vraagScope
     */
    public function setInnheeftAlsFunctionaris($innheeftAlsFunctionaris)
    {
      $this->innheeftAlsFunctionaris = $innheeftAlsFunctionaris;
      return $this;
    }

    /**
     * @return NNPMACvraagScope
     */
    public function getRpsisEigenaarVan()
    {
      return $this->rpsisEigenaarVan;
    }

    /**
     * @param NNPMACvraagScope $rpsisEigenaarVan
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
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
     * @return NNP-vraagScope
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
