<?php

namespace RRSVP\Stuf;

class SUBantwoord
{

    /**
     * @var NPSantwoord $natuurlijkPersoon
     */
    protected $natuurlijkPersoon = null;

    /**
     * @var NNPantwoord $nietNatuurlijkPersoon
     */
    protected $nietNatuurlijkPersoon = null;

    /**
     * @var VESantwoord $vestiging
     */
    protected $vestiging = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param NPSantwoord $natuurlijkPersoon
     * @param NNPantwoord $nietNatuurlijkPersoon
     * @param VESantwoord $vestiging
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
     * @return NPSantwoord
     */
    public function getNatuurlijkPersoon()
    {
      return $this->natuurlijkPersoon;
    }

    /**
     * @param NPSantwoord $natuurlijkPersoon
     * @return \RRSVP\Stuf\SUB-antwoord
     */
    public function setNatuurlijkPersoon($natuurlijkPersoon)
    {
      $this->natuurlijkPersoon = $natuurlijkPersoon;
      return $this;
    }

    /**
     * @return NNPantwoord
     */
    public function getNietNatuurlijkPersoon()
    {
      return $this->nietNatuurlijkPersoon;
    }

    /**
     * @param NNPantwoord $nietNatuurlijkPersoon
     * @return \RRSVP\Stuf\SUB-antwoord
     */
    public function setNietNatuurlijkPersoon($nietNatuurlijkPersoon)
    {
      $this->nietNatuurlijkPersoon = $nietNatuurlijkPersoon;
      return $this;
    }

    /**
     * @return VESantwoord
     */
    public function getVestiging()
    {
      return $this->vestiging;
    }

    /**
     * @param VESantwoord $vestiging
     * @return \RRSVP\Stuf\SUB-antwoord
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
     * @return \RRSVP\Stuf\SUB-antwoord
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
