<?php

class RPSvraagScope
{

    /**
     * @var NPSvraagScope $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPvraagScope $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

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
     * @return NPSvraagScope
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSvraagScope $natuurlijkPersoon
     * @return RPS-vraagScope
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPvraagScope
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPvraagScope $nietNatuurlijkPersoon
     * @return RPS-vraagScope
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
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
     * @return RPS-vraagScope
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
