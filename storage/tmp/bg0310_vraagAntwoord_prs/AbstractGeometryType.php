<?php

namespace RRSVP\Stuf;

abstract class AbstractGeometryType extends AbstractGMLType
{

    /**
     * @var string $gid
     */
    protected $gid = null;

    /**
     * @var anyURI $srsName
     */
    protected $srsName = null;

    /**
     * @var int $srsDimension
     */
    protected $srsDimension = null;

    /**
     * @var NCNameList $axisLabels
     */
    protected $axisLabels = null;

    /**
     * @var NCNameList $uomLabels
     */
    protected $uomLabels = null;

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
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->gid = $gid;
      $this->srsName = $srsName;
      $this->srsDimension = $srsDimension;
      $this->axisLabels = $axisLabels;
      $this->uomLabels = $uomLabels;
    }

    /**
     * @return string
     */
    public function getGid()
    {
      return $this->gid;
    }

    /**
     * @param string $gid
     * @return \RRSVP\Stuf\AbstractGeometryType
     */
    public function setGid($gid)
    {
      $this->gid = $gid;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSrsName()
    {
      return $this->srsName;
    }

    /**
     * @param anyURI $srsName
     * @return \RRSVP\Stuf\AbstractGeometryType
     */
    public function setSrsName($srsName)
    {
      $this->srsName = $srsName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSrsDimension()
    {
      return $this->srsDimension;
    }

    /**
     * @param int $srsDimension
     * @return \RRSVP\Stuf\AbstractGeometryType
     */
    public function setSrsDimension($srsDimension)
    {
      $this->srsDimension = $srsDimension;
      return $this;
    }

    /**
     * @return NCNameList
     */
    public function getAxisLabels()
    {
      return $this->axisLabels;
    }

    /**
     * @param NCNameList $axisLabels
     * @return \RRSVP\Stuf\AbstractGeometryType
     */
    public function setAxisLabels($axisLabels)
    {
      $this->axisLabels = $axisLabels;
      return $this;
    }

    /**
     * @return NCNameList
     */
    public function getUomLabels()
    {
      return $this->uomLabels;
    }

    /**
     * @param NCNameList $uomLabels
     * @return \RRSVP\Stuf\AbstractGeometryType
     */
    public function setUomLabels($uomLabels)
    {
      $this->uomLabels = $uomLabels;
      return $this;
    }

}
