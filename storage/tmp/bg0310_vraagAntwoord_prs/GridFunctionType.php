<?php

namespace RRSVP\Stuf;

class GridFunctionType
{

    /**
     * @var SequenceRuleType $sequenceRule
     */
    protected $sequenceRule = null;

    /**
     * @var integerList $startPoint
     */
    protected $startPoint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SequenceRuleType
     */
    public function getSequenceRule()
    {
      return $this->sequenceRule;
    }

    /**
     * @param SequenceRuleType $sequenceRule
     * @return \RRSVP\Stuf\GridFunctionType
     */
    public function setSequenceRule($sequenceRule)
    {
      $this->sequenceRule = $sequenceRule;
      return $this;
    }

    /**
     * @return integerList
     */
    public function getStartPoint()
    {
      return $this->startPoint;
    }

    /**
     * @param integerList $startPoint
     * @return \RRSVP\Stuf\GridFunctionType
     */
    public function setStartPoint($startPoint)
    {
      $this->startPoint = $startPoint;
      return $this;
    }

}
