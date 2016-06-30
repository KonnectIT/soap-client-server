<?php

namespace RRSVP\Stuf;

class DerivationUnitTermType extends UnitOfMeasureType
{

    /**
     * @var int $exponent
     */
    protected $exponent = null;

    /**
     * @param anyURI $uom
     * @param int $exponent
     */
    public function __construct($uom, $exponent)
    {
      parent::__construct($uom);
      $this->exponent = $exponent;
    }

    /**
     * @return int
     */
    public function getExponent()
    {
      return $this->exponent;
    }

    /**
     * @param int $exponent
     * @return \RRSVP\Stuf\DerivationUnitTermType
     */
    public function setExponent($exponent)
    {
      $this->exponent = $exponent;
      return $this;
    }

}
