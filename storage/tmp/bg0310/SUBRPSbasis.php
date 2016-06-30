<?php

class SUBRPSbasis
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

    /**
     * @var VESbasis $vestiging
     */
    protected $vestiging = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param Entiteittype $entiteittype
     */
    public function __construct($entiteittype)
    {
      $this->entiteittype = $entiteittype;
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
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
     * @return SUBRPS-basis
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

    /**
     * @return VESbasis
     */
    public function getVestiging()
    {
      return $this->vestiging;
    }

    /**
     * @param VESbasis $vestiging
     * @return SUBRPS-basis
     */
    public function setVestiging($vestiging)
    {
      $this->vestiging = $vestiging;
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
     * @return SUBRPS-basis
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
