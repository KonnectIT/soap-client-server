<?php

namespace RRSVP\Stuf;

class DegreesType
{

    /**
     * @var DegreeValueType $_
     */
    protected $_ = null;

    /**
     * @var anonymous1301 $direction
     */
    protected $direction = null;

    /**
     * @param DegreeValueType $_
     * @param anonymous1301 $direction
     */
    public function __construct($_, $direction)
    {
      $this->_ = $_;
      $this->direction = $direction;
    }

    /**
     * @return DegreeValueType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param DegreeValueType $_
     * @return \RRSVP\Stuf\DegreesType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous1301
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param anonymous1301 $direction
     * @return \RRSVP\Stuf\DegreesType
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

}
