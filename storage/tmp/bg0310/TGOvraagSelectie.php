<?php

class TGOvraagSelectie
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
     * @var AdrGrpvraag $adresAanduidingGrp
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
     * @var InOnderzoekTGOvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBAGvraag $brondocument
     */
    protected $brondocument = null;

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
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var TGOAOANVNvraag $heeftNevenadressen
     */
    protected $heeftNevenadressen = null;

    /**
     * @var TGOPNDvraag $vbomaaktDeelUitVan
     */
    protected $vbomaaktDeelUitVan = null;

    /**
     * @var TGOKOZvraagSelectie $heeftOverlapMet
     */
    protected $heeftOverlapMet = null;

    /**
     * @var TGOTGONARvraag $isOvergegaanIn
     */
    protected $isOvergegaanIn = null;

    /**
     * @var TGOTGOVANvraag $isOntstaanUit
     */
    protected $isOntstaanUit = null;

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
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakGeldigheid, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
     */
    public function setTypering($typering)
    {
      $this->typering = $typering;
      return $this;
    }

    /**
     * @return AdrGrpvraag
     */
    public function getAdresAanduidingGrp()
    {
      return $this->adresAanduidingGrp;
    }

    /**
     * @param AdrGrpvraag $adresAanduidingGrp
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
     */
    public function setAotgeconstateerd($aotgeconstateerd)
    {
      $this->aotgeconstateerd = $aotgeconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekTGOvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekTGOvraag $inOnderzoek
     * @return TGO-vraagSelectie
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBAGvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBAGvraag $brondocument
     * @return TGO-vraagSelectie
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return TGOAOANVNvraag
     */
    public function getHeeftNevenadressen()
    {
      return $this->heeftNevenadressen;
    }

    /**
     * @param TGOAOANVNvraag $heeftNevenadressen
     * @return TGO-vraagSelectie
     */
    public function setHeeftNevenadressen($heeftNevenadressen)
    {
      $this->heeftNevenadressen = $heeftNevenadressen;
      return $this;
    }

    /**
     * @return TGOPNDvraag
     */
    public function getVbomaaktDeelUitVan()
    {
      return $this->vbomaaktDeelUitVan;
    }

    /**
     * @param TGOPNDvraag $vbomaaktDeelUitVan
     * @return TGO-vraagSelectie
     */
    public function setVbomaaktDeelUitVan($vbomaaktDeelUitVan)
    {
      $this->vbomaaktDeelUitVan = $vbomaaktDeelUitVan;
      return $this;
    }

    /**
     * @return TGOKOZvraagSelectie
     */
    public function getHeeftOverlapMet()
    {
      return $this->heeftOverlapMet;
    }

    /**
     * @param TGOKOZvraagSelectie $heeftOverlapMet
     * @return TGO-vraagSelectie
     */
    public function setHeeftOverlapMet($heeftOverlapMet)
    {
      $this->heeftOverlapMet = $heeftOverlapMet;
      return $this;
    }

    /**
     * @return TGOTGONARvraag
     */
    public function getIsOvergegaanIn()
    {
      return $this->isOvergegaanIn;
    }

    /**
     * @param TGOTGONARvraag $isOvergegaanIn
     * @return TGO-vraagSelectie
     */
    public function setIsOvergegaanIn($isOvergegaanIn)
    {
      $this->isOvergegaanIn = $isOvergegaanIn;
      return $this;
    }

    /**
     * @return TGOTGOVANvraag
     */
    public function getIsOntstaanUit()
    {
      return $this->isOntstaanUit;
    }

    /**
     * @param TGOTGOVANvraag $isOntstaanUit
     * @return TGO-vraagSelectie
     */
    public function setIsOntstaanUit($isOntstaanUit)
    {
      $this->isOntstaanUit = $isOntstaanUit;
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
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
     * @return TGO-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
