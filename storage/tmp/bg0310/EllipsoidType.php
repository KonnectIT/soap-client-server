<?php

class EllipsoidType extends EllipsoidBaseType
{

    /**
     * @var IdentifierType $ellipsoidID
     */
    protected $ellipsoidID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var MeasureType $semiMajorAxis
     */
    protected $semiMajorAxis = null;

    /**
     * @var SecondDefiningParameterType $secondDefiningParameter
     */
    protected $secondDefiningParameter = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $ellipsoidName
     * @param ID $id
     * @param IdentifierType $ellipsoidID
     * @param StringOrRefType $remarks
     * @param MeasureType $semiMajorAxis
     * @param SecondDefiningParameterType $secondDefiningParameter
     */
    public function __construct($metaDataProperty, $ellipsoidName, $id, $ellipsoidID, $remarks, $semiMajorAxis, $secondDefiningParameter)
    {
      parent::__construct($metaDataProperty, $ellipsoidName, $id);
      $this->ellipsoidID = $ellipsoidID;
      $this->remarks = $remarks;
      $this->semiMajorAxis = $semiMajorAxis;
      $this->secondDefiningParameter = $secondDefiningParameter;
    }

    /**
     * @return IdentifierType
     */
    public function getEllipsoidID()
    {
      return $this->ellipsoidID;
    }

    /**
     * @param IdentifierType $ellipsoidID
     * @return EllipsoidType
     */
    public function setEllipsoidID($ellipsoidID)
    {
      $this->ellipsoidID = $ellipsoidID;
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
     * @return EllipsoidType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getSemiMajorAxis()
    {
      return $this->semiMajorAxis;
    }

    /**
     * @param MeasureType $semiMajorAxis
     * @return EllipsoidType
     */
    public function setSemiMajorAxis($semiMajorAxis)
    {
      $this->semiMajorAxis = $semiMajorAxis;
      return $this;
    }

    /**
     * @return SecondDefiningParameterType
     */
    public function getSecondDefiningParameter()
    {
      return $this->secondDefiningParameter;
    }

    /**
     * @param SecondDefiningParameterType $secondDefiningParameter
     * @return EllipsoidType
     */
    public function setSecondDefiningParameter($secondDefiningParameter)
    {
      $this->secondDefiningParameter = $secondDefiningParameter;
      return $this;
    }

}
