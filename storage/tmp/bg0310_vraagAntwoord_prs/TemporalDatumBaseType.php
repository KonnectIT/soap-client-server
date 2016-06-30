<?php

namespace RRSVP\Stuf;

abstract class TemporalDatumBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $datumName
     */
    protected $datumName = null;

    /**
     * @var IdentifierType $datumID
     */
    protected $datumID = null;

    /**
     * @var ExtentType $validArea
     */
    protected $validArea = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param IdentifierType $datumID
     * @param ExtentType $validArea
     * @param string $scope
     * @param ID $id
     */
    public function __construct($metaDataProperty, $datumName, $datumID, $validArea, $scope, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->datumName = $datumName;
      $this->datumID = $datumID;
      $this->validArea = $validArea;
      $this->scope = $scope;
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
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getDatumName()
    {
      return $this->datumName;
    }

    /**
     * @param CodeType $datumName
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setDatumName($datumName)
    {
      $this->datumName = $datumName;
      return $this;
    }

    /**
     * @return IdentifierType
     */
    public function getDatumID()
    {
      return $this->datumID;
    }

    /**
     * @param IdentifierType $datumID
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setDatumID($datumID)
    {
      $this->datumID = $datumID;
      return $this;
    }

    /**
     * @return ExtentType
     */
    public function getValidArea()
    {
      return $this->validArea;
    }

    /**
     * @param ExtentType $validArea
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setValidArea($validArea)
    {
      $this->validArea = $validArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
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
     * @return \RRSVP\Stuf\TemporalDatumBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
