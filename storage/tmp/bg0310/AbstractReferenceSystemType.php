<?php

abstract class AbstractReferenceSystemType extends AbstractReferenceSystemBaseType
{

    /**
     * @var IdentifierType $srsID
     */
    protected $srsID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var ExtentType $validArea
     */
    protected $validArea = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope)
    {
      parent::__construct($metaDataProperty, $srsName, $id);
      $this->srsID = $srsID;
      $this->remarks = $remarks;
      $this->validArea = $validArea;
      $this->scope = $scope;
    }

    /**
     * @return IdentifierType
     */
    public function getSrsID()
    {
      return $this->srsID;
    }

    /**
     * @param IdentifierType $srsID
     * @return AbstractReferenceSystemType
     */
    public function setSrsID($srsID)
    {
      $this->srsID = $srsID;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param StringOrRefType $remarks
     * @return AbstractReferenceSystemType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
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
     * @return AbstractReferenceSystemType
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
     * @return AbstractReferenceSystemType
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
