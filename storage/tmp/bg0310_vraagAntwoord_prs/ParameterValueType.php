<?php

namespace RRSVP\Stuf;

class ParameterValueType extends AbstractGeneralParameterValueType
{

    /**
     * @var MeasureType $value
     */
    protected $value = null;

    /**
     * @var DMSAngleType $dmsAngleValue
     */
    protected $dmsAngleValue = null;

    /**
     * @var string $stringValue
     */
    protected $stringValue = null;

    /**
     * @var int $integerValue
     */
    protected $integerValue = null;

    /**
     * @var boolean $booleanValue
     */
    protected $booleanValue = null;

    /**
     * @var MeasureListType $valueList
     */
    protected $valueList = null;

    /**
     * @var integerList $integerValueList
     */
    protected $integerValueList = null;

    /**
     * @var anyURI $valueFile
     */
    protected $valueFile = null;

    /**
     * @var OperationParameterRefType $valueOfParameter
     */
    protected $valueOfParameter = null;

    /**
     * @param MeasureType $value
     * @param DMSAngleType $dmsAngleValue
     * @param string $stringValue
     * @param int $integerValue
     * @param boolean $booleanValue
     * @param MeasureListType $valueList
     * @param integerList $integerValueList
     * @param anyURI $valueFile
     * @param OperationParameterRefType $valueOfParameter
     */
    public function __construct($value, $dmsAngleValue, $stringValue, $integerValue, $booleanValue, $valueList, $integerValueList, $valueFile, $valueOfParameter)
    {
      $this->value = $value;
      $this->dmsAngleValue = $dmsAngleValue;
      $this->stringValue = $stringValue;
      $this->integerValue = $integerValue;
      $this->booleanValue = $booleanValue;
      $this->valueList = $valueList;
      $this->integerValueList = $integerValueList;
      $this->valueFile = $valueFile;
      $this->valueOfParameter = $valueOfParameter;
    }

    /**
     * @return MeasureType
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param MeasureType $value
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return DMSAngleType
     */
    public function getDmsAngleValue()
    {
      return $this->dmsAngleValue;
    }

    /**
     * @param DMSAngleType $dmsAngleValue
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setDmsAngleValue($dmsAngleValue)
    {
      $this->dmsAngleValue = $dmsAngleValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
      return $this->stringValue;
    }

    /**
     * @param string $stringValue
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setStringValue($stringValue)
    {
      $this->stringValue = $stringValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntegerValue()
    {
      return $this->integerValue;
    }

    /**
     * @param int $integerValue
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setIntegerValue($integerValue)
    {
      $this->integerValue = $integerValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBooleanValue()
    {
      return $this->booleanValue;
    }

    /**
     * @param boolean $booleanValue
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setBooleanValue($booleanValue)
    {
      $this->booleanValue = $booleanValue;
      return $this;
    }

    /**
     * @return MeasureListType
     */
    public function getValueList()
    {
      return $this->valueList;
    }

    /**
     * @param MeasureListType $valueList
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setValueList($valueList)
    {
      $this->valueList = $valueList;
      return $this;
    }

    /**
     * @return integerList
     */
    public function getIntegerValueList()
    {
      return $this->integerValueList;
    }

    /**
     * @param integerList $integerValueList
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setIntegerValueList($integerValueList)
    {
      $this->integerValueList = $integerValueList;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getValueFile()
    {
      return $this->valueFile;
    }

    /**
     * @param anyURI $valueFile
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setValueFile($valueFile)
    {
      $this->valueFile = $valueFile;
      return $this;
    }

    /**
     * @return OperationParameterRefType
     */
    public function getValueOfParameter()
    {
      return $this->valueOfParameter;
    }

    /**
     * @param OperationParameterRefType $valueOfParameter
     * @return \RRSVP\Stuf\ParameterValueType
     */
    public function setValueOfParameter($valueOfParameter)
    {
      $this->valueOfParameter = $valueOfParameter;
      return $this;
    }

}
