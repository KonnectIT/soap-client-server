<?php

class FeatureCollectionType extends AbstractFeatureCollectionType
{

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     * @param FeaturePropertyType $featureMember
     * @param FeatureArrayPropertyType $featureMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $featureMember, $featureMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $featureMember, $featureMembers);
    }

}
