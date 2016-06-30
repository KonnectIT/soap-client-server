<?php

class CoverageFunctionType
{

    /**
     * @var StringOrRefType $MappingRule
     */
    protected $MappingRule = null;

    /**
     * @var GridFunctionType $GridFunction
     */
    protected $GridFunction = null;

    /**
     * @param StringOrRefType $MappingRule
     * @param GridFunctionType $GridFunction
     */
    public function __construct($MappingRule, $GridFunction)
    {
      $this->MappingRule = $MappingRule;
      $this->GridFunction = $GridFunction;
    }

    /**
     * @return StringOrRefType
     */
    public function getMappingRule()
    {
      return $this->MappingRule;
    }

    /**
     * @param StringOrRefType $MappingRule
     * @return CoverageFunctionType
     */
    public function setMappingRule($MappingRule)
    {
      $this->MappingRule = $MappingRule;
      return $this;
    }

    /**
     * @return GridFunctionType
     */
    public function getGridFunction()
    {
      return $this->GridFunction;
    }

    /**
     * @param GridFunctionType $GridFunction
     * @return CoverageFunctionType
     */
    public function setGridFunction($GridFunction)
    {
      $this->GridFunction = $GridFunction;
      return $this;
    }

}
