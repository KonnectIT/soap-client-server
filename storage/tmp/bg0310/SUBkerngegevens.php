<?php

class SUBkerngegevens
{

    /**
     * @var NPSkerngegevens $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPkerngegevens $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

    /**
     * @var VESkerngegevens $vestiging
     */
    protected $vestiging = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param NPSkerngegevens $natuurlijkPersoon
     * @param NNPkerngegevens $nietNatuurlijkPersoon
     * @param VESkerngegevens $vestiging
     * @param Entiteittype $entiteittype
     */
    public function __construct($natuurlijkPersoon, $nietNatuurlijkPersoon, $vestiging, $entiteittype)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      $this->vestiging = $vestiging;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return NPSkerngegevens
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSkerngegevens $natuurlijkPersoon
     * @return SUB-kerngegevens
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPkerngegevens
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPkerngegevens $nietNatuurlijkPersoon
     * @return SUB-kerngegevens
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

    /**
     * @return VESkerngegevens
     */
    public function getVestiging()
    {
      return $this->vestiging;
    }

    /**
     * @param VESkerngegevens $vestiging
     * @return SUB-kerngegevens
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
     * @return SUB-kerngegevens
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
