<?php

namespace RRSVP\Stuf;

class SphericalCSType extends AbstractCoordinateSystemType
{

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $csName
     * @param ID $id
     * @param IdentifierType $csID
     * @param StringOrRefType $remarks
     * @param CoordinateSystemAxisRefType $usesAxis
     */
    public function __construct($metaDataProperty, $csName, $id, $csID, $remarks, $usesAxis)
    {
      parent::__construct($metaDataProperty, $csName, $id, $csID, $remarks, $usesAxis);
    }

}
