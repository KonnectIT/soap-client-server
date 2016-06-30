<?php

namespace RRSVP\Stuf;

class GridLimitsType
{

    /**
     * @var GridEnvelopeType $GridEnvelope
     */
    protected $GridEnvelope = null;

    /**
     * @param GridEnvelopeType $GridEnvelope
     */
    public function __construct($GridEnvelope)
    {
      $this->GridEnvelope = $GridEnvelope;
    }

    /**
     * @return GridEnvelopeType
     */
    public function getGridEnvelope()
    {
      return $this->GridEnvelope;
    }

    /**
     * @param GridEnvelopeType $GridEnvelope
     * @return \RRSVP\Stuf\GridLimitsType
     */
    public function setGridEnvelope($GridEnvelope)
    {
      $this->GridEnvelope = $GridEnvelope;
      return $this;
    }

}
