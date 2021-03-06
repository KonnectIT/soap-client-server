<?php

namespace RRSVP\Stuf;

class KnotPropertyType
{

    /**
     * @var KnotType $Knot
     */
    protected $Knot = null;

    /**
     * @param KnotType $Knot
     */
    public function __construct($Knot)
    {
      $this->Knot = $Knot;
    }

    /**
     * @return KnotType
     */
    public function getKnot()
    {
      return $this->Knot;
    }

    /**
     * @param KnotType $Knot
     * @return \RRSVP\Stuf\KnotPropertyType
     */
    public function setKnot($Knot)
    {
      $this->Knot = $Knot;
      return $this;
    }

}
