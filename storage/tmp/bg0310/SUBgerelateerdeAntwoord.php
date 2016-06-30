<?php

class SUBgerelateerdeAntwoord
{

    /**
     * @var NPSgerelateerdeAntwoord $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPgerelateerdeAntwoord $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

    /**
     * @var VESgerelateerdeAntwoord $vestiging
     */
    protected $vestiging = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param NPSgerelateerdeAntwoord $natuurlijkPersoon
     * @param NNPgerelateerdeAntwoord $nietNatuurlijkPersoon
     * @param VESgerelateerdeAntwoord $vestiging
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
     * @return NPSgerelateerdeAntwoord
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSgerelateerdeAntwoord $natuurlijkPersoon
     * @return SUB-gerelateerdeAntwoord
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPgerelateerdeAntwoord
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPgerelateerdeAntwoord $nietNatuurlijkPersoon
     * @return SUB-gerelateerdeAntwoord
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

    /**
     * @return VESgerelateerdeAntwoord
     */
    public function getVestiging()
    {
      return $this->vestiging;
    }

    /**
     * @param VESgerelateerdeAntwoord $vestiging
     * @return SUB-gerelateerdeAntwoord
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
     * @return SUB-gerelateerdeAntwoord
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
