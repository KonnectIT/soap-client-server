<?php

namespace RRSVP\Stuf;

class VESgerelateerdeVraagSelectie
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
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var VESTGOHFDvraag $heeftAlsHoofdLocatie
     */
    protected $heeftAlsHoofdLocatie = null;

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
     * @return VestigingsNummere
     */
    public function getVestigingsNummer()
    {
      return $this->vestigingsNummer;
    }

    /**
     * @param VestigingsNummere $vestigingsNummer
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
     */
    public function setHeeftAlsHoofdLocatie($heeftAlsHoofdLocatie)
    {
      $this->heeftAlsHoofdLocatie = $heeftAlsHoofdLocatie;
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
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
     * @return \RRSVP\Stuf\VES-gerelateerdeVraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
