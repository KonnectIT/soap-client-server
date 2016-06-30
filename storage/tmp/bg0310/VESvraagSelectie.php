<?php

class VESvraagSelectie
{

    /**
     * @var VestigingsNummere $vestigingsNummer
     */
    protected $vestigingsNummer = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

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
     * @var DatumMetIndicator $datumAanvang
     */
    protected $datumAanvang = null;

    /**
     * @var DatumMetIndicator $datumEinde
     */
    protected $datumEinde = null;

    /**
     * @var ActiviteitGrpZonderVolgorde $activiteit
     */
    protected $activiteit = null;

    /**
     * @var TyperingVESe $typeringVestiging
     */
    protected $typeringVestiging = null;

    /**
     * @var VerblijfsadresGrpNNPVESvraag $verblijfsadres
     */
    protected $verblijfsadres = null;

    /**
     * @var VerblijfBuitenlandGrp $subverblijfBuitenland
     */
    protected $subverblijfBuitenland = null;

    /**
     * @var CorrespondentieAdresGrpvraagSelectie $subcorrespondentieAdres
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
     * @var InOnderzoekVESvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var TijdvakGeldigheid $tijdvakGeldigheid
     */
    protected $tijdvakGeldigheid = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var VESMACvraagSelectie $oefentActiviteitenUitVoor
     */
    protected $oefentActiviteitenUitVoor = null;

    /**
     * @var VESTGOHFDvraag $heeftAlsHoofdLocatie
     */
    protected $heeftAlsHoofdLocatie = null;

    /**
     * @var VESTGONVNvraag $heeftAlsNevenLocatie
     */
    protected $heeftAlsNevenLocatie = null;

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
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $extraElementen, $entiteittype, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
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
     * @return VES-vraagSelectie
     */
    public function setVestigingsNummer($vestigingsNummer)
    {
      $this->vestigingsNummer = $vestigingsNummer;
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
     * @return VES-vraagSelectie
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
     */
    public function setVolgorde($volgorde)
    {
      $this->volgorde = $volgorde;
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
     * @return VES-vraagSelectie
     */
    public function setDatumAanvang($datumAanvang)
    {
      $this->datumAanvang = $datumAanvang;
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
     * @return VES-vraagSelectie
     */
    public function setDatumEinde($datumEinde)
    {
      $this->datumEinde = $datumEinde;
      return $this;
    }

    /**
     * @return ActiviteitGrpZonderVolgorde
     */
    public function getActiviteit()
    {
      return $this->activiteit;
    }

    /**
     * @param ActiviteitGrpZonderVolgorde $activiteit
     * @return VES-vraagSelectie
     */
    public function setActiviteit($activiteit)
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
     * @return VES-vraagSelectie
     */
    public function setTyperingVestiging($typeringVestiging)
    {
      $this->typeringVestiging = $typeringVestiging;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpNNPVESvraag
     */
    public function getVerblijfsadres()
    {
      return $this->verblijfsadres;
    }

    /**
     * @param VerblijfsadresGrpNNPVESvraag $verblijfsadres
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
     */
    public function setSubverblijfBuitenland($subverblijfBuitenland)
    {
      $this->subverblijfBuitenland = $subverblijfBuitenland;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpvraagSelectie
     */
    public function getSubcorrespondentieAdres()
    {
      return $this->subcorrespondentieAdres;
    }

    /**
     * @param CorrespondentieAdresGrpvraagSelectie $subcorrespondentieAdres
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
     */
    public function setSubrekeningnummerBankGiro($subrekeningnummerBankGiro)
    {
      $this->subrekeningnummerBankGiro = $subrekeningnummerBankGiro;
      return $this;
    }

    /**
     * @return InOnderzoekVESvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekVESvraag $inOnderzoek
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return VESMACvraagSelectie
     */
    public function getOefentActiviteitenUitVoor()
    {
      return $this->oefentActiviteitenUitVoor;
    }

    /**
     * @param VESMACvraagSelectie $oefentActiviteitenUitVoor
     * @return VES-vraagSelectie
     */
    public function setOefentActiviteitenUitVoor($oefentActiviteitenUitVoor)
    {
      $this->oefentActiviteitenUitVoor = $oefentActiviteitenUitVoor;
      return $this;
    }

    /**
     * @return VESTGOHFDvraag
     */
    public function getHeeftAlsHoofdLocatie()
    {
      return $this->heeftAlsHoofdLocatie;
    }

    /**
     * @param VESTGOHFDvraag $heeftAlsHoofdLocatie
     * @return VES-vraagSelectie
     */
    public function setHeeftAlsHoofdLocatie($heeftAlsHoofdLocatie)
    {
      $this->heeftAlsHoofdLocatie = $heeftAlsHoofdLocatie;
      return $this;
    }

    /**
     * @return VESTGONVNvraag
     */
    public function getHeeftAlsNevenLocatie()
    {
      return $this->heeftAlsNevenLocatie;
    }

    /**
     * @param VESTGONVNvraag $heeftAlsNevenLocatie
     * @return VES-vraagSelectie
     */
    public function setHeeftAlsNevenLocatie($heeftAlsNevenLocatie)
    {
      $this->heeftAlsNevenLocatie = $heeftAlsNevenLocatie;
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
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
     * @return VES-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
