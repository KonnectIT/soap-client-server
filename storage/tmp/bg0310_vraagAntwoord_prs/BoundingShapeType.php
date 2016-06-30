<?php

namespace RRSVP\Stuf;

class BoundingShapeType
{

    /**
     * @var EnvelopeType $Envelope
     */
    protected $Envelope = null;

    /**
     * @var NullType $Null
     */
    protected $Null = null;

    /**
     * @param EnvelopeType $Envelope
     * @param NullType $Null
     */
    public function __construct($Envelope, $Null)
    {
      $this->Envelope = $Envelope;
      $this->Null = $Null;
    }

    /**
     * @return EnvelopeType
     */
    public function getEnvelope()
    {
      return $this->Envelope;
    }

    /**
     * @param EnvelopeType $Envelope
     * @return \RRSVP\Stuf\BoundingShapeType
     */
    public function setEnvelope($Envelope)
    {
      $this->Envelope = $Envelope;
      return $this;
    }

    /**
     * @return NullType
     */
    public function getNull()
    {
      return $this->Null;
    }

    /**
     * @param NullType $Null
     * @return \RRSVP\Stuf\BoundingShapeType
     */
    public function setNull($Null)
    {
      $this->Null = $Null;
      return $this;
    }

}
