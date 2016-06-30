<?php

namespace RRSVP\Stuf;

class GeometriePunte extends PointPropertyType
{

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var boolean $exact
     */
    protected $exact = null;

    /**
     * @param PointType $Point
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     * @param NoValue $noValue
     * @param boolean $exact
     */
    public function __construct($Point, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate, $noValue, $exact)
    {
      parent::__construct($Point, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate);
      $this->noValue = $noValue;
      $this->exact = $exact;
    }

    /**
     * @return NoValue
     */
    public function getNoValue()
    {
      return $this->noValue;
    }

    /**
     * @param NoValue $noValue
     * @return \RRSVP\Stuf\GeometriePunt-e
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExact()
    {
      return $this->exact;
    }

    /**
     * @param boolean $exact
     * @return \RRSVP\Stuf\GeometriePunt-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
