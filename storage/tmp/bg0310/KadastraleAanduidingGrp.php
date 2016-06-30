<?php

class KadastraleAanduidingGrp
{

    /**
     * @var KadastraleGemeentecodee $kadastraleGemeentecode
     */
    protected $kadastraleGemeentecode = null;

    /**
     * @var KadastraleSectiee $kadastraleSectie
     */
    protected $kadastraleSectie = null;

    /**
     * @var KadastraalPerceelnummere $kadastraalPerceelnummer
     */
    protected $kadastraalPerceelnummer = null;

    /**
     * @var DeelperceelNummere $kdpdeelperceelNummer
     */
    protected $kdpdeelperceelNummer = null;

    /**
     * @var Appartementsindexe $aprappartementsIndex
     */
    protected $aprappartementsIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KadastraleGemeentecodee
     */
    public function getKadastraleGemeentecode()
    {
      return $this->kadastraleGemeentecode;
    }

    /**
     * @param KadastraleGemeentecodee $kadastraleGemeentecode
     * @return KadastraleAanduidingGrp
     */
    public function setKadastraleGemeentecode($kadastraleGemeentecode)
    {
      $this->kadastraleGemeentecode = $kadastraleGemeentecode;
      return $this;
    }

    /**
     * @return KadastraleSectiee
     */
    public function getKadastraleSectie()
    {
      return $this->kadastraleSectie;
    }

    /**
     * @param KadastraleSectiee $kadastraleSectie
     * @return KadastraleAanduidingGrp
     */
    public function setKadastraleSectie($kadastraleSectie)
    {
      $this->kadastraleSectie = $kadastraleSectie;
      return $this;
    }

    /**
     * @return KadastraalPerceelnummere
     */
    public function getKadastraalPerceelnummer()
    {
      return $this->kadastraalPerceelnummer;
    }

    /**
     * @param KadastraalPerceelnummere $kadastraalPerceelnummer
     * @return KadastraleAanduidingGrp
     */
    public function setKadastraalPerceelnummer($kadastraalPerceelnummer)
    {
      $this->kadastraalPerceelnummer = $kadastraalPerceelnummer;
      return $this;
    }

    /**
     * @return DeelperceelNummere
     */
    public function getKdpdeelperceelNummer()
    {
      return $this->kdpdeelperceelNummer;
    }

    /**
     * @param DeelperceelNummere $kdpdeelperceelNummer
     * @return KadastraleAanduidingGrp
     */
    public function setKdpdeelperceelNummer($kdpdeelperceelNummer)
    {
      $this->kdpdeelperceelNummer = $kdpdeelperceelNummer;
      return $this;
    }

    /**
     * @return Appartementsindexe
     */
    public function getAprappartementsIndex()
    {
      return $this->aprappartementsIndex;
    }

    /**
     * @param Appartementsindexe $aprappartementsIndex
     * @return KadastraleAanduidingGrp
     */
    public function setAprappartementsIndex($aprappartementsIndex)
    {
      $this->aprappartementsIndex = $aprappartementsIndex;
      return $this;
    }

}
