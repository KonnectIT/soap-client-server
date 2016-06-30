<?php

namespace RRSVP\Stuf;

class AnytypeTargetMetEntiteittype
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param string $any
     * @param Entiteittype $entiteittype
     */
    public function __construct($any, $entiteittype)
    {
      $this->any = $any;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \RRSVP\Stuf\AnytypeTargetMetEntiteittype
     */
    public function setAny($any)
    {
      $this->any = $any;
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
     * @return \RRSVP\Stuf\AnytypeTargetMetEntiteittype
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
