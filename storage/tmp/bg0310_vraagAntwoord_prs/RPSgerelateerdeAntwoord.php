<?php

namespace RRSVP\Stuf;

class RPSgerelateerdeAntwoord
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
     * @return NPSgerelateerdeAntwoord
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSgerelateerdeAntwoord $natuurlijkPersoon
     * @return \RRSVP\Stuf\RPS-gerelateerdeAntwoord
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
     * @return \RRSVP\Stuf\RPS-gerelateerdeAntwoord
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
     * @return \RRSVP\Stuf\RPS-gerelateerdeAntwoord
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
