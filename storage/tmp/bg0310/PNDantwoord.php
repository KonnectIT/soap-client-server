<?php

class PNDantwoord
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
     * @var GeometrieVlake $geometrie
     */
    protected $geometrie = null;

    /**
     * @var InwinningswijzeGeometriee $inwinningswijzeGeometrieBovenaanzicht
     */
    protected $inwinningswijzeGeometrieBovenaanzicht = null;

    /**
     * @var GeometrieVlake $geometrieOpMaaiveld
     */
    protected $geometrieOpMaaiveld = null;

    /**
     * @var InwinningswijzeGeometriee $inwinningswijzeGeometrieMaaiveld
     */
    protected $inwinningswijzeGeometrieMaaiveld = null;

    /**
     * @var Jaare $bouwjaar
     */
    protected $bouwjaar = null;

    /**
     * @var Maateenheid6e $oppervlakte
     */
    protected $oppervlakte = null;

    /**
     * @var Maateenheid6e $brutoInhoud
     */
    protected $brutoInhoud = null;

    /**
     * @var Bouwlaage $laagsteBouwlaag
     */
    protected $laagsteBouwlaag = null;

    /**
     * @var Bouwlaage $hoogsteBouwlaag
     */
    protected $hoogsteBouwlaag = null;

    /**
     * @var RelatieveHoogteligginge $relatieveHoogteligging
     */
    protected $relatieveHoogteligging = null;

    /**
     * @var StatusPande $status
     */
    protected $status = null;

    /**
     * @var StatusVoortgangBouwe $statusVoortgangBouw
     */
    protected $statusVoortgangBouw = null;

    /**
     * @var Indicatiee $geconstateerd
     */
    protected $geconstateerd = null;

    /**
     * @var InOnderzoekPND $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var BrondocumentBGR $brondocument
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
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var PND-historieMaterieel[] $historieMaterieel
     */
    protected $historieMaterieel = null;

    /**
     * @var PND-historieFormeel[] $historieFormeel
     */
    protected $historieFormeel = null;

    /**
     * @var PNDTGO-antwoord[] $heeftInliggend
     */
    protected $heeftInliggend = null;

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
     * @return PND-antwoord
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
     * @return PND-antwoord
     */
    public function setAuthentiek($authentiek)
    {
      $this->authentiek = $authentiek;
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
     */
    public function setWykwijkNaam($wykwijkNaam)
    {
      $this->wykwijkNaam = $wykwijkNaam;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getGeometrie()
    {
      return $this->geometrie;
    }

    /**
     * @param GeometrieVlake $geometrie
     * @return PND-antwoord
     */
    public function setGeometrie($geometrie)
    {
      $this->geometrie = $geometrie;
      return $this;
    }

    /**
     * @return InwinningswijzeGeometriee
     */
    public function getInwinningswijzeGeometrieBovenaanzicht()
    {
      return $this->inwinningswijzeGeometrieBovenaanzicht;
    }

    /**
     * @param InwinningswijzeGeometriee $inwinningswijzeGeometrieBovenaanzicht
     * @return PND-antwoord
     */
    public function setInwinningswijzeGeometrieBovenaanzicht($inwinningswijzeGeometrieBovenaanzicht)
    {
      $this->inwinningswijzeGeometrieBovenaanzicht = $inwinningswijzeGeometrieBovenaanzicht;
      return $this;
    }

    /**
     * @return GeometrieVlake
     */
    public function getGeometrieOpMaaiveld()
    {
      return $this->geometrieOpMaaiveld;
    }

    /**
     * @param GeometrieVlake $geometrieOpMaaiveld
     * @return PND-antwoord
     */
    public function setGeometrieOpMaaiveld($geometrieOpMaaiveld)
    {
      $this->geometrieOpMaaiveld = $geometrieOpMaaiveld;
      return $this;
    }

    /**
     * @return InwinningswijzeGeometriee
     */
    public function getInwinningswijzeGeometrieMaaiveld()
    {
      return $this->inwinningswijzeGeometrieMaaiveld;
    }

    /**
     * @param InwinningswijzeGeometriee $inwinningswijzeGeometrieMaaiveld
     * @return PND-antwoord
     */
    public function setInwinningswijzeGeometrieMaaiveld($inwinningswijzeGeometrieMaaiveld)
    {
      $this->inwinningswijzeGeometrieMaaiveld = $inwinningswijzeGeometrieMaaiveld;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getBouwjaar()
    {
      return $this->bouwjaar;
    }

    /**
     * @param Jaare $bouwjaar
     * @return PND-antwoord
     */
    public function setBouwjaar($bouwjaar)
    {
      $this->bouwjaar = $bouwjaar;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getOppervlakte()
    {
      return $this->oppervlakte;
    }

    /**
     * @param Maateenheid6e $oppervlakte
     * @return PND-antwoord
     */
    public function setOppervlakte($oppervlakte)
    {
      $this->oppervlakte = $oppervlakte;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getBrutoInhoud()
    {
      return $this->brutoInhoud;
    }

    /**
     * @param Maateenheid6e $brutoInhoud
     * @return PND-antwoord
     */
    public function setBrutoInhoud($brutoInhoud)
    {
      $this->brutoInhoud = $brutoInhoud;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getLaagsteBouwlaag()
    {
      return $this->laagsteBouwlaag;
    }

    /**
     * @param Bouwlaage $laagsteBouwlaag
     * @return PND-antwoord
     */
    public function setLaagsteBouwlaag($laagsteBouwlaag)
    {
      $this->laagsteBouwlaag = $laagsteBouwlaag;
      return $this;
    }

    /**
     * @return Bouwlaage
     */
    public function getHoogsteBouwlaag()
    {
      return $this->hoogsteBouwlaag;
    }

    /**
     * @param Bouwlaage $hoogsteBouwlaag
     * @return PND-antwoord
     */
    public function setHoogsteBouwlaag($hoogsteBouwlaag)
    {
      $this->hoogsteBouwlaag = $hoogsteBouwlaag;
      return $this;
    }

    /**
     * @return RelatieveHoogteligginge
     */
    public function getRelatieveHoogteligging()
    {
      return $this->relatieveHoogteligging;
    }

    /**
     * @param RelatieveHoogteligginge $relatieveHoogteligging
     * @return PND-antwoord
     */
    public function setRelatieveHoogteligging($relatieveHoogteligging)
    {
      $this->relatieveHoogteligging = $relatieveHoogteligging;
      return $this;
    }

    /**
     * @return StatusPande
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StatusPande $status
     * @return PND-antwoord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return StatusVoortgangBouwe
     */
    public function getStatusVoortgangBouw()
    {
      return $this->statusVoortgangBouw;
    }

    /**
     * @param StatusVoortgangBouwe $statusVoortgangBouw
     * @return PND-antwoord
     */
    public function setStatusVoortgangBouw($statusVoortgangBouw)
    {
      $this->statusVoortgangBouw = $statusVoortgangBouw;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getGeconstateerd()
    {
      return $this->geconstateerd;
    }

    /**
     * @param Indicatiee $geconstateerd
     * @return PND-antwoord
     */
    public function setGeconstateerd($geconstateerd)
    {
      $this->geconstateerd = $geconstateerd;
      return $this;
    }

    /**
     * @return InOnderzoekPND
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekPND $inOnderzoek
     * @return PND-antwoord
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return BrondocumentBGR
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBGR $brondocument
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return PND-historieMaterieel[]
     */
    public function getHistorieMaterieel()
    {
      return $this->historieMaterieel;
    }

    /**
     * @param PND-historieMaterieel[] $historieMaterieel
     * @return PND-antwoord
     */
    public function setHistorieMaterieel(array $historieMaterieel = null)
    {
      $this->historieMaterieel = $historieMaterieel;
      return $this;
    }

    /**
     * @return PND-historieFormeel[]
     */
    public function getHistorieFormeel()
    {
      return $this->historieFormeel;
    }

    /**
     * @param PND-historieFormeel[] $historieFormeel
     * @return PND-antwoord
     */
    public function setHistorieFormeel(array $historieFormeel = null)
    {
      $this->historieFormeel = $historieFormeel;
      return $this;
    }

    /**
     * @return PNDTGO-antwoord[]
     */
    public function getHeeftInliggend()
    {
      return $this->heeftInliggend;
    }

    /**
     * @param PNDTGO-antwoord[] $heeftInliggend
     * @return PND-antwoord
     */
    public function setHeeftInliggend(array $heeftInliggend = null)
    {
      $this->heeftInliggend = $heeftInliggend;
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
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
     * @return PND-antwoord
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
