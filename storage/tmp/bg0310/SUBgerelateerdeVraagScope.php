<?php

class SUBgerelateerdeVraagScope
{

    /**
     * @var NPSgerelateerdeVraagScope $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPgerelateerdeVraagScope $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

    /**
     * @var VESgerelateerdeVraagScope $vestiging
     */
    protected $vestiging = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param NPSgerelateerdeVraagScope $natuurlijkPersoon
     * @param NNPgerelateerdeVraagScope $nietNatuurlijkPersoon
     * @param VESgerelateerdeVraagScope $vestiging
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
     * @return NPSgerelateerdeVraagScope
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSgerelateerdeVraagScope $natuurlijkPersoon
     * @return SUB-gerelateerdeVraagScope
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPgerelateerdeVraagScope
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPgerelateerdeVraagScope $nietNatuurlijkPersoon
     * @return SUB-gerelateerdeVraagScope
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

    /**
     * @return VESgerelateerdeVraagScope
     */
    public function getVestiging()
    {
      return $this->vestiging;
    }

    /**
     * @param VESgerelateerdeVraagScope $vestiging
     * @return SUB-gerelateerdeVraagScope
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
     * @return SUB-gerelateerdeVraagScope
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
