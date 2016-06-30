<?php

namespace RRSVP\Stuf;

class DirectPositionListType
{

    /**
     * @var doubleList $_
     */
    protected $_ = null;

    /**
     * @var int $count
     */
    protected $count = null;

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
     * @param doubleList $_
     * @param int $count
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     */
    public function __construct($_, $count, $srsName, $srsDimension, $axisLabels, $uomLabels)
    {
      $this->_ = $_;
      $this->count = $count;
      $this->srsName = $srsName;
      $this->srsDimension = $srsDimension;
      $this->axisLabels = $axisLabels;
      $this->uomLabels = $uomLabels;
    }

    /**
     * @return doubleList
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param doubleList $_
     * @return \RRSVP\Stuf\DirectPositionListType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param int $count
     * @return \RRSVP\Stuf\DirectPositionListType
     */
    public function setCount($count)
    {
      $this->count = $count;
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
     * @return \RRSVP\Stuf\DirectPositionListType
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
     * @return \RRSVP\Stuf\DirectPositionListType
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
     * @return \RRSVP\Stuf\DirectPositionListType
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
     * @return \RRSVP\Stuf\DirectPositionListType
     */
    public function setUomLabels($uomLabels)
    {
      $this->uomLabels = $uomLabels;
      return $this;
    }

}
