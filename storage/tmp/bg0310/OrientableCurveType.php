<?php

class OrientableCurveType extends AbstractCurveType
{

    /**
     * @var CurvePropertyType $baseCurve
     */
    protected $baseCurve = null;

    /**
     * @var SignType $orientation
     */
    protected $orientation = null;

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
     * @param CurvePropertyType $baseCurve
     * @param SignType $orientation
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $baseCurve, $orientation)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->baseCurve = $baseCurve;
      $this->orientation = $orientation;
    }

    /**
     * @return CurvePropertyType
     */
    public function getBaseCurve()
    {
      return $this->baseCurve;
    }

    /**
     * @param CurvePropertyType $baseCurve
     * @return OrientableCurveType
     */
    public function setBaseCurve($baseCurve)
    {
      $this->baseCurve = $baseCurve;
      return $this;
    }

    /**
     * @return SignType
     */
    public function getOrientation()
    {
      return $this->orientation;
    }

    /**
     * @param SignType $orientation
     * @return OrientableCurveType
     */
    public function setOrientation($orientation)
    {
      $this->orientation = $orientation;
      return $this;
    }

}
