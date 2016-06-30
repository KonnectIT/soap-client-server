<?php

namespace RRSVP\Stuf;

abstract class OperationParameterBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $parameterName
     */
    protected $parameterName = null;

    /**
     * @var int $minimumOccurs
     */
    protected $minimumOccurs = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $parameterName
     * @param int $minimumOccurs
     * @param ID $id
     */
    public function __construct($metaDataProperty, $parameterName, $minimumOccurs, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->parameterName = $parameterName;
      $this->minimumOccurs = $minimumOccurs;
      $this->id = $id;
    }

    /**
     * @return MetaDataPropertyType
     */
    public function getMetaDataProperty()
    {
      return $this->metaDataProperty;
    }

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @return \RRSVP\Stuf\OperationParameterBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getParameterName()
    {
      return $this->parameterName;
    }

    /**
     * @param CodeType $parameterName
     * @return \RRSVP\Stuf\OperationParameterBaseType
     */
    public function setParameterName($parameterName)
    {
      $this->parameterName = $parameterName;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumOccurs()
    {
      return $this->minimumOccurs;
    }

    /**
     * @param int $minimumOccurs
     * @return \RRSVP\Stuf\OperationParameterBaseType
     */
    public function setMinimumOccurs($minimumOccurs)
    {
      $this->minimumOccurs = $minimumOccurs;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \RRSVP\Stuf\OperationParameterBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
