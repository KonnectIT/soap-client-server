<?php

abstract class AbstractFeatureCollectionType extends AbstractFeatureType
{

    /**
     * @var FeaturePropertyType $featureMember
     */
    protected $featureMember = null;

    /**
     * @var FeatureArrayPropertyType $featureMembers
     */
    protected $featureMembers = null;

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
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location);
      $this->featureMember = $featureMember;
      $this->featureMembers = $featureMembers;
    }

    /**
     * @return FeaturePropertyType
     */
    public function getFeatureMember()
    {
      return $this->featureMember;
    }

    /**
     * @param FeaturePropertyType $featureMember
     * @return AbstractFeatureCollectionType
     */
    public function setFeatureMember($featureMember)
    {
      $this->featureMember = $featureMember;
      return $this;
    }

    /**
     * @return FeatureArrayPropertyType
     */
    public function getFeatureMembers()
    {
      return $this->featureMembers;
    }

    /**
     * @param FeatureArrayPropertyType $featureMembers
     * @return AbstractFeatureCollectionType
     */
    public function setFeatureMembers($featureMembers)
    {
      $this->featureMembers = $featureMembers;
      return $this;
    }

}
