<?php

namespace RRSVP\Stuf;

class RelativeInternalPositionalAccuracyType extends AbstractPositionalAccuracyType
{

    /**
     * @var MeasureType $result
     */
    protected $result = null;

    /**
     * @param CodeType $measureDescription
     * @param MeasureType $result
     */
    public function __construct($measureDescription, $result)
    {
      parent::__construct($measureDescription);
      $this->result = $result;
    }

    /**
     * @return MeasureType
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param MeasureType $result
     * @return \RRSVP\Stuf\RelativeInternalPositionalAccuracyType
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
