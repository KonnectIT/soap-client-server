<?php

namespace RRSVP\Stuf;

class DirectionVectorType
{

    /**
     * @var VectorType $vector
     */
    protected $vector = null;

    /**
     * @var AngleType $horizontalAngle
     */
    protected $horizontalAngle = null;

    /**
     * @var AngleType $verticalAngle
     */
    protected $verticalAngle = null;

    /**
     * @param VectorType $vector
     * @param AngleType $horizontalAngle
     * @param AngleType $verticalAngle
     */
    public function __construct($vector, $horizontalAngle, $verticalAngle)
    {
      $this->vector = $vector;
      $this->horizontalAngle = $horizontalAngle;
      $this->verticalAngle = $verticalAngle;
    }

    /**
     * @return VectorType
     */
    public function getVector()
    {
      return $this->vector;
    }

    /**
     * @param VectorType $vector
     * @return \RRSVP\Stuf\DirectionVectorType
     */
    public function setVector($vector)
    {
      $this->vector = $vector;
      return $this;
    }

    /**
     * @return AngleType
     */
    public function getHorizontalAngle()
    {
      return $this->horizontalAngle;
    }

    /**
     * @param AngleType $horizontalAngle
     * @return \RRSVP\Stuf\DirectionVectorType
     */
    public function setHorizontalAngle($horizontalAngle)
    {
      $this->horizontalAngle = $horizontalAngle;
      return $this;
    }

    /**
     * @return AngleType
     */
    public function getVerticalAngle()
    {
      return $this->verticalAngle;
    }

    /**
     * @param AngleType $verticalAngle
     * @return \RRSVP\Stuf\DirectionVectorType
     */
    public function setVerticalAngle($verticalAngle)
    {
      $this->verticalAngle = $verticalAngle;
      return $this;
    }

}
