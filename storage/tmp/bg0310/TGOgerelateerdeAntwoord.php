<?php

class TGOgerelateerdeAntwoord
{

    /**
     * @var ObjectNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Authentiek $authentiek
     */
    protected $authentiek = null;

    /**
     * @var TyperingTGOe $typering
     */
    protected $typering = null;

    /**
     * @var AdrGrpantwoord $adresAanduidingGrp
     */
    protected $adresAanduidingGrp = null;

    /**
     * @var BuurtCodee $brtbuurtCode
     */
    protected $brtbuurtCode = null;

    /**
     * @var BuurtNaame $brtbuurtNaam
     */
    protected $brtbuurtNaam = null;

    /**
     * @var Gemeentecoderinge $gemgemeenteCode
     */
    protected $gemgemeenteCode = null;

    /**
     * @var Gemeentenaame $gemgemeenteNaam
     */
    protected $gemgemeenteNaam = null;

    /**
     * @var WijkCodee $wykwijkCode
     */
    protected $wykwijkCode = null;

    /**
     * @var WijkNaame $wykwijkNaam
     */
    protected $wykwijkNaam = null;

    /**
     * @var GeometriePunte $gbopuntGeometrie
     */
    protected $gbopuntGeometrie = null;

    /**
     * @var GeometrieVlake $vlakGeometrie
     */
    protected $vlakGeometrie = null;

    /**
     * @var TypeOGOofOTRe $type
     */
    protected $type = null;

    /**
     * @var SoortWoonobjecte $vbosoortWoonobject
     */
    protected $vbosoortWoonobject = null;

    /**
     * @var BouwkundigeBestemming-e[] $gbobouwkundigeBestemming
     */
    protected $gbobouwkundigeBestemming = null;

    /**
     * @var Gebruiksdoeleinden-e[] $gebruiksdoel
     */
    protected $gebruiksdoel = null;

    /**
     * @var Maateenheid6e $gbobrutoInhoud
     */
    protected $gbobrutoInhoud = null;

    /**
     * @var Maateenheid6e $gbooppervlakte
     */
    protected $gbooppervlakte = null;

    /**
     * @var InwinningswijzeOppervlaktee $gboinwinningswijzeOppervlakte
     */
    protected $gboinwinningswijzeOppervlakte = null;

    /**
     * @var Jaare $ogobouwjaar
     */
    protected $ogobouwjaar = null;

    /**
     * @var Bouwlaage $vbolaagsteBouwlaag
     */
    protected $vbolaagsteBouwlaag = null;

    /**
     * @var Bouwlaage $vbohoogsteBouwlaag
     */
    protected $vbohoogsteBouwlaag = null;

    /**
     * @var Bouwlaage $vbotoegangBouwlaag
     */
    protected $vbotoegangBouwlaag = null;

    /**
     * @var Maateenheid2e $vboaantalKamers
     */
    protected $vboaantalKamers = null;

    /**
     * @var OntsluitingVerdiepinge $vboontsluitingVerdieping
     */
    protected $vboontsluitingVerdieping = null;

    /**
     * @var StatusTGOe $aotstatus
     */
    protected $aotstatus = null;

    /**
     * @var StatusVoortgangBouwe $gbostatusVoortgangBouw
     */
    protected $gbostatusVoortgangBouw = null;

    /**
     * @var Indicatiee $aotgeconstateerd
     */
    protected $aotgeconstateerd = null;

    /**
     * @var InOnderzoekTGO $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var DatumMetIndicator $ingangsdatumObject
     */
    protected $ingangsdatumObject = null;

    /**
     * @var DatumMetIndicator $einddatumObject
     */
    protected $einddatumObject = null;

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
     * @return ObjectNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param ObjectNummeringe $identificatie
     * @return TGO-gerelateerdeAntwoord
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
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
     * @return TGO-gerelateerdeAntwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
      return $this;
    }

    /**
     * @return TyperingTGOe
     */
    public function getTypering()
    {
      return $this->typering;
    }

    /**
     * @param TyperingTGOe $typering
     * @return TGO-gerelateerdeAntwoord
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return AdrGrpantwoord
     */
    public function getAdresAanduidingGrp()
    {
      return $this->adresAanduidingGrp;
    }

    /**
     * @param AdrGrpantwoord $adresAanduidingGrp
     * @return TGO-gerelateerdeAntwoord
     */
    public function setAdresAanduidingGrp($adresAanduidingGrp)
    {
      $this->adresAanduidingGrp = $adresAanduidingGrp;
      return $this;
    }

    /**
     * @return BuurtCodee
     */
    public function getBrtbuurtCode()
    {
      return $this->brtbuurtCode;
    }

    /**
     * @param BuurtCodee $brtbuurtCode
     * @return TGO-gerelateerdeAntwoord
     */
    public function setBrtbuurtCode($brtbuurtCode)
    {
      $this->brtbuurtCode = $brtbuurtCode;
      return $this;
    }

    /**
     * @return BuurtNaame
     */
    public function getBrtbuurtNaam()
    {
      return $this->brtbuurtNaam;
    }

    /**
     * @param BuurtNaame $brtbuurtNaam
     * @return TGO-gerelateerdeAntwoord
     */
    public function setBrtbuurtNaam($brtbuurtNaam)
    {
      $this->brtbuurtNaam = $brtbuurtNaam;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getGemgemeenteCode()
    {
      return $this->gemgemeenteCode;
    }

    /**
     * @param Gemeentecoderinge $gemgemeenteCode
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGemgemeenteCode($gemgemeenteCode)
    {
      $this->gemgemeenteCode = $gemgemeenteCode;
      return $this;
    }

    /**
     * @return Gemeentenaame
     */
    public function getGemgemeenteNaam()
    {
      return $this->gemgemeenteNaam;
    }

    /**
     * @param Gemeentenaame $gemgemeenteNaam
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGemgemeenteNaam($gemgemeenteNaam)
    {
      $this->gemgemeenteNaam = $gemgemeenteNaam;
      return $this;
    }

    /**
     * @return WijkCodee
     */
    public function getWykwijkCode()
    {
      return $this->wykwijkCode;
    }

    /**
     * @param WijkCodee $wykwijkCode
     * @return TGO-gerelateerdeAntwoord
     */
    public function setWykwijkCode($wykwijkCode)
    {
      $this->wykwijkCode = $wykwijkCode;
      return $this;
    }

    /**
     * @return WijkNaame
     */
    public function getWykwijkNaam()
    {
      return $this->wykwijkNaam;
    }

    /**
     * @param WijkNaame $wykwijkNaam
     * @return TGO-gerelateerdeAntwoord
     */
    public function setWykwijkNaam($wykwijkNaam)
    {
      $this->wykwijkNaam = $wykwijkNaam;
      return $this;
    }

    /**
     * @return GeometriePunte
     */
    public function getGbopuntGeometrie()
    {
      return $this->gbopuntGeometrie;
    }

    /**
     * @param GeometriePunte $gbopuntGeometrie
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGbopuntGeometrie($gbopuntGeometrie)
    {
      $this->gbopuntGeometrie = $gbopuntGeometrie;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getVlakGeometrie()
    {
      return $this->vlakGeometrie;
    }

    /**
     * @param GeometrieVlake $vlakGeometrie
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVlakGeometrie($vlakGeometrie)
    {
      $this->vlakGeometrie = $vlakGeometrie;
      return $this;
    }

    /**
     * @return TypeOGOofOTRe
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TypeOGOofOTRe $type
     * @return TGO-gerelateerdeAntwoord
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SoortWoonobjecte
     */
    public function getVbosoortWoonobject()
    {
      return $this->vbosoortWoonobject;
    }

    /**
     * @param SoortWoonobjecte $vbosoortWoonobject
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVbosoortWoonobject($vbosoortWoonobject)
    {
      $this->vbosoortWoonobject = $vbosoortWoonobject;
      return $this;
    }

    /**
     * @return BouwkundigeBestemming-e[]
     */
    public function getGbobouwkundigeBestemming()
    {
      return $this->gbobouwkundigeBestemming;
    }

    /**
     * @param BouwkundigeBestemming-e[] $gbobouwkundigeBestemming
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGbobouwkundigeBestemming(array $gbobouwkundigeBestemming = null)
    {
      $this->gbobouwkundigeBestemming = $gbobouwkundigeBestemming;
      return $this;
    }

    /**
     * @return Gebruiksdoeleinden-e[]
     */
    public function getGebruiksdoel()
    {
      return $this->gebruiksdoel;
    }

    /**
     * @param Gebruiksdoeleinden-e[] $gebruiksdoel
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGebruiksdoel(array $gebruiksdoel = null)
    {
      $this->gebruiksdoel = $gebruiksdoel;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getGbobrutoInhoud()
    {
      return $this->gbobrutoInhoud;
    }

    /**
     * @param Maateenheid6e $gbobrutoInhoud
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGbobrutoInhoud($gbobrutoInhoud)
    {
      $this->gbobrutoInhoud = $gbobrutoInhoud;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getGbooppervlakte()
    {
      return $this->gbooppervlakte;
    }

    /**
     * @param Maateenheid6e $gbooppervlakte
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGbooppervlakte($gbooppervlakte)
    {
      $this->gbooppervlakte = $gbooppervlakte;
      return $this;
    }

    /**
     * @return InwinningswijzeOppervlaktee
     */
    public function getGboinwinningswijzeOppervlakte()
    {
      return $this->gboinwinningswijzeOppervlakte;
    }

    /**
     * @param InwinningswijzeOppervlaktee $gboinwinningswijzeOppervlakte
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGboinwinningswijzeOppervlakte($gboinwinningswijzeOppervlakte)
    {
      $this->gboinwinningswijzeOppervlakte = $gboinwinningswijzeOppervlakte;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getOgobouwjaar()
    {
      return $this->ogobouwjaar;
    }

    /**
     * @param Jaare $ogobouwjaar
     * @return TGO-gerelateerdeAntwoord
     */
    public function setOgobouwjaar($ogobouwjaar)
    {
      $this->ogobouwjaar = $ogobouwjaar;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getVbolaagsteBouwlaag()
    {
      return $this->vbolaagsteBouwlaag;
    }

    /**
     * @param Bouwlaage $vbolaagsteBouwlaag
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVbolaagsteBouwlaag($vbolaagsteBouwlaag)
    {
      $this->vbolaagsteBouwlaag = $vbolaagsteBouwlaag;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getVbohoogsteBouwlaag()
    {
      return $this->vbohoogsteBouwlaag;
    }

    /**
     * @param Bouwlaage $vbohoogsteBouwlaag
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVbohoogsteBouwlaag($vbohoogsteBouwlaag)
    {
      $this->vbohoogsteBouwlaag = $vbohoogsteBouwlaag;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getVbotoegangBouwlaag()
    {
      return $this->vbotoegangBouwlaag;
    }

    /**
     * @param Bouwlaage $vbotoegangBouwlaag
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVbotoegangBouwlaag($vbotoegangBouwlaag)
    {
      $this->vbotoegangBouwlaag = $vbotoegangBouwlaag;
      return $this;
    }

    /**
     * @return Maateenheid2e
     */
    public function getVboaantalKamers()
    {
      return $this->vboaantalKamers;
    }

    /**
     * @param Maateenheid2e $vboaantalKamers
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVboaantalKamers($vboaantalKamers)
    {
      $this->vboaantalKamers = $vboaantalKamers;
      return $this;
    }

    /**
     * @return OntsluitingVerdiepinge
     */
    public function getVboontsluitingVerdieping()
    {
      return $this->vboontsluitingVerdieping;
    }

    /**
     * @param OntsluitingVerdiepinge $vboontsluitingVerdieping
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVboontsluitingVerdieping($vboontsluitingVerdieping)
    {
      $this->vboontsluitingVerdieping = $vboontsluitingVerdieping;
      return $this;
    }

    /**
     * @return StatusTGOe
     */
    public function getAotstatus()
    {
      return $this->aotstatus;
    }

    /**
     * @param StatusTGOe $aotstatus
     * @return TGO-gerelateerdeAntwoord
     */
    public function setAotstatus($aotstatus)
    {
      $this->aotstatus = $aotstatus;
      return $this;
    }

    /**
     * @return StatusVoortgangBouwe
     */
    public function getGbostatusVoortgangBouw()
    {
      return $this->gbostatusVoortgangBouw;
    }

    /**
     * @param StatusVoortgangBouwe $gbostatusVoortgangBouw
     * @return TGO-gerelateerdeAntwoord
     */
    public function setGbostatusVoortgangBouw($gbostatusVoortgangBouw)
    {
      $this->gbostatusVoortgangBouw = $gbostatusVoortgangBouw;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getAotgeconstateerd()
    {
      return $this->aotgeconstateerd;
    }

    /**
     * @param Indicatiee $aotgeconstateerd
     * @return TGO-gerelateerdeAntwoord
     */
    public function setAotgeconstateerd($aotgeconstateerd)
    {
      $this->aotgeconstateerd = $aotgeconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekTGO
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekTGO $inOnderzoek
     * @return TGO-gerelateerdeAntwoord
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getIngangsdatumObject()
    {
      return $this->ingangsdatumObject;
    }

    /**
     * @param DatumMetIndicator $ingangsdatumObject
     * @return TGO-gerelateerdeAntwoord
     */
    public function setIngangsdatumObject($ingangsdatumObject)
    {
      $this->ingangsdatumObject = $ingangsdatumObject;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEinddatumObject()
    {
      return $this->einddatumObject;
    }

    /**
     * @param DatumMetIndicator $einddatumObject
     * @return TGO-gerelateerdeAntwoord
     */
    public function setEinddatumObject($einddatumObject)
    {
      $this->einddatumObject = $einddatumObject;
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
     * @return TGO-gerelateerdeAntwoord
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
     * @return TGO-gerelateerdeAntwoord
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
     * @return TGO-gerelateerdeAntwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return TGO-gerelateerdeAntwoord
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
     * @return TGO-gerelateerdeAntwoord
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
     * @return TGO-gerelateerdeAntwoord
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
     * @return TGO-gerelateerdeAntwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
