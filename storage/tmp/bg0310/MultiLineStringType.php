<?php

class MultiLineStringType extends AbstractGeometricAggregateType
{

    /**
     * @var LineStringPropertyType $lineStringMember
     */
    protected $lineStringMember = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param string $gid
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     * @param LineStringPropertyType $lineStringMember
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $lineStringMember)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->lineStringMember = $lineStringMember;
    }

    /**
     * @return LineStringPropertyType
     */
    public function getLineStringMember()
    {
      return $this->lineStringMember;
    }

    /**
     * @param LineStringPropertyType $lineStringMember
     * @return MultiLineStringType
     */
    public function setLineStringMember($lineStringMember)
    {
      $this->lineStringMember = $lineStringMember;
      return $this;
    }

}
