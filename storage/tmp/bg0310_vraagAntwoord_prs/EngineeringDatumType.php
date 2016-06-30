<?php

namespace RRSVP\Stuf;

class EngineeringDatumType extends AbstractDatumType
{

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
     */
    public function __construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope)
    {
      parent::__construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope);
    }

}
