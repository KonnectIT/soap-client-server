<?php

class RPSbasis
{

    /**
     * @var Geslachtsnaame $naam
     */
    protected $naam = null;

    /**
     * @var BsVesNummerOfIde $bsVesNummerOfId
     */
    protected $bsVesNummerOfId = null;

    /**
     * @var KvKNummere $kvkNummer
     */
    protected $kvkNummer = null;

    /**
     * @var CorrespondentieAdresGrpbasis $adresNederland
     */
    protected $adresNederland = null;

    /**
     * @var VerblijfBuitenlandGrp $adresBuitenland
     */
    protected $adresBuitenland = null;

    /**
     * @var NPSNININGbasis $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPINNbasis $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Geslachtsnaame
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param Geslachtsnaame $naam
     * @return RPS-basis
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
      return $this;
    }

    /**
     * @return BsVesNummerOfIde
     */
    public function getBsVesNummerOfId()
    {
      return $this->bsVesNummerOfId;
    }

    /**
     * @param BsVesNummerOfIde $bsVesNummerOfId
     * @return RPS-basis
     */
    public function setBsVesNummerOfId($bsVesNummerOfId)
    {
      $this->bsVesNummerOfId = $bsVesNummerOfId;
      return $this;
    }

    /**
     * @return KvKNummere
     */
    public function getKvkNummer()
    {
      return $this->kvkNummer;
    }

    /**
     * @param KvKNummere $kvkNummer
     * @return RPS-basis
     */
    public function setKvkNummer($kvkNummer)
    {
      $this->kvkNummer = $kvkNummer;
      return $this;
    }

    /**
     * @return CorrespondentieAdresGrpbasis
     */
    public function getAdresNederland()
    {
      return $this->adresNederland;
    }

    /**
     * @param CorrespondentieAdresGrpbasis $adresNederland
     * @return RPS-basis
     */
    public function setAdresNederland($adresNederland)
    {
      $this->adresNederland = $adresNederland;
      return $this;
    }

    /**
     * @return VerblijfBuitenlandGrp
     */
    public function getAdresBuitenland()
    {
      return $this->adresBuitenland;
    }

    /**
     * @param VerblijfBuitenlandGrp $adresBuitenland
     * @return RPS-basis
     */
    public function setAdresBuitenland($adresBuitenland)
    {
      $this->adresBuitenland = $adresBuitenland;
      return $this;
    }

    /**
     * @return NPSNININGbasis
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSNININGbasis $natuurlijkPersoon
     * @return RPS-basis
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPINNbasis
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPINNbasis $nietNatuurlijkPersoon
     * @return RPS-basis
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

}
