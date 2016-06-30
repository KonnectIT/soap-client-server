<?php

namespace RRSVP\Stuf;

class NNPINNbasis
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
     * @var CorrespondentieAdresGrpbasis $subcorrespondentieAdres
     */
    protected $subcorrespondentieAdres = null;

    /**
     * @var VerblijfsadresGrpbasis $bezoekadres
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
     * @var InOnderzoekNNP-basis[] $inOnderzoek
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
     * @var NNPINN-basis[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var NNPINN-basis[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var NNPRPS-basis[] $innheeftAlsFunctionaris
     */
    protected $innheeftAlsFunctionaris = null;

    /**
     * @var NNPMAC-basis[] $rpsisEigenaarVan
     */
    protected $rpsisEigenaarVan = null;

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
     * @var Sleutel $sleutelSynchronisatie
     */
    protected $sleutelSynchronisatie = null;

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
     * @param Sleutel $sleutelSynchronisatie
     * @param NoValue $noValue
     * @param anonymous82 $scope
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $sleutelVerzendend, $sleutelOntvangend, $sleutelGegevensbeheer, $sleutelSynchronisatie, $noValue, $scope, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->sleutelVerzendend = $sleutelVerzendend;
      $this->sleutelOntvangend = $sleutelOntvangend;
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setDatumEinde($datumEinde)
    {
      $this->datumEinde = $datumEinde;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpbasis
     */
    public function getSubcorrespondentieAdres()
    {
      return $this->subcorrespondentieAdres;
    }

    /**
     * @param CorrespondentieAdresGrpbasis $subcorrespondentieAdres
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setSubcorrespondentieAdres($subcorrespondentieAdres)
    {
      $this->subcorrespondentieAdres = $subcorrespondentieAdres;
      return $this;
    }

    /**
     * @return VerblijfsadresGrpbasis
     */
    public function getBezoekadres()
    {
      return $this->bezoekadres;
    }

    /**
     * @param VerblijfsadresGrpbasis $bezoekadres
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setSubrekeningnummerBankGiro($subrekeningnummerBankGiro)
    {
      $this->subrekeningnummerBankGiro = $subrekeningnummerBankGiro;
      return $this;
    }

    /**
     * @return InOnderzoekNNP-basis[]
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekNNP-basis[] $inOnderzoek
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return NNPINN-basis[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param NNPINN-basis[] $historieMaterieel
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return NNPINN-basis[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param NNPINN-basis[] $historieFormeel
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return NNPRPS-basis[]
     */
    public function getInnheeftAlsFunctionaris()
    {
      return $this->innheeftAlsFunctionaris;
    }

    /**
     * @param NNPRPS-basis[] $innheeftAlsFunctionaris
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setInnheeftAlsFunctionaris(array $innheeftAlsFunctionaris = null)
    {
      $this->innheeftAlsFunctionaris = $innheeftAlsFunctionaris;
      return $this;
    }

    /**
     * @return NNPMAC-basis[]
     */
    public function getRpsisEigenaarVan()
    {
      return $this->rpsisEigenaarVan;
    }

    /**
     * @param NNPMAC-basis[] $rpsisEigenaarVan
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setRpsisEigenaarVan(array $rpsisEigenaarVan = null)
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setSleutelGegevensbeheer($sleutelGegevensbeheer)
    {
      $this->sleutelGegevensbeheer = $sleutelGegevensbeheer;
      return $this;
    }

    /**
     * @return Sleutel
     */
    public function getSleutelSynchronisatie()
    {
      return $this->sleutelSynchronisatie;
    }

    /**
     * @param Sleutel $sleutelSynchronisatie
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setSleutelSynchronisatie($sleutelSynchronisatie)
    {
      $this->sleutelSynchronisatie = $sleutelSynchronisatie;
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
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
     * @return \RRSVP\Stuf\NNPINN-basis
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
