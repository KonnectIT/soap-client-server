<?php

namespace RRSVP\Stuf;

class VerticalDatumType extends AbstractDatumType
{

    /**
     * @var VerticalDatumTypeType $verticalDatumType
     */
    protected $verticalDatumType = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param ID $id
     * @param IdentifierType $datumID
     * @param StringOrRefType $remarks
     * @param CodeType $anchorPoint
     * @param date $realizationEpoch
     * @param ExtentType $validArea
     * @param string $scope
     * @param VerticalDatumTypeType $verticalDatumType
     */
    public function __construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope, $verticalDatumType)
    {
      parent::__construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope);
      $this->verticalDatumType = $verticalDatumType;
    }

    /**
     * @return VerticalDatumTypeType
     */
    public function getVerticalDatumType()
    {
      return $this->verticalDatumType;
    }

    /**
     * @param VerticalDatumTypeType $verticalDatumType
     * @return \RRSVP\Stuf\VerticalDatumType
     */
    public function setVerticalDatumType($verticalDatumType)
    {
      $this->verticalDatumType = $verticalDatumType;
      return $this;
    }

}
