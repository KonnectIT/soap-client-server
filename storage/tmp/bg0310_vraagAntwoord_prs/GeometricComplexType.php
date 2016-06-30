<?php

namespace RRSVP\Stuf;

class GeometricComplexType extends AbstractGeometryType
{

    /**
     * @var GeometricPrimitivePropertyType[] $element
     */
    protected $element = null;

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
     * @param GeometricPrimitivePropertyType[] $element
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, array $element)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->element = $element;
    }

    /**
     * @return GeometricPrimitivePropertyType[]
     */
    public function getElement()
    {
      return $this->element;
    }

    /**
     * @param GeometricPrimitivePropertyType[] $element
     * @return \RRSVP\Stuf\GeometricComplexType
     */
    public function setElement(array $element)
    {
      $this->element = $element;
      return $this;
    }

}
