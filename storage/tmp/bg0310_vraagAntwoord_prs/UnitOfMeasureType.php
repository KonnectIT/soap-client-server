<?php

namespace RRSVP\Stuf;

class UnitOfMeasureType
{

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param anyURI $uom
     */
    public function __construct($uom)
    {
      $this->uom = $uom;
    }

    /**
     * @return anyURI
     */
    public function getUom()
    {
      return $this->uom;
    }

    /**
     * @param anyURI $uom
     * @return \RRSVP\Stuf\UnitOfMeasureType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
