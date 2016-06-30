<?php

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
     * @return GridFunctionType
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
     * @return GridFunctionType
     */
    public function setStartPoint($startPoint)
    {
      $this->startPoint = $startPoint;
      return $this;
    }

}
