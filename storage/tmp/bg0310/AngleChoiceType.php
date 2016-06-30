<?php

class AngleChoiceType
{

    /**
     * @var MeasureType $angle
     */
    protected $angle = null;

    /**
     * @var DMSAngleType $dmsAngle
     */
    protected $dmsAngle = null;

    /**
     * @param MeasureType $angle
     * @param DMSAngleType $dmsAngle
     */
    public function __construct($angle, $dmsAngle)
    {
      $this->angle = $angle;
      $this->dmsAngle = $dmsAngle;
    }

    /**
     * @return MeasureType
     */
    public function getAngle()
    {
      return $this->angle;
    }

    /**
     * @param MeasureType $angle
     * @return AngleChoiceType
     */
    public function setAngle($angle)
    {
      $this->angle = $angle;
      return $this;
    }

    /**
     * @return DMSAngleType
     */
    public function getDmsAngle()
    {
      return $this->dmsAngle;
    }

    /**
     * @param DMSAngleType $dmsAngle
     * @return AngleChoiceType
     */
    public function setDmsAngle($dmsAngle)
    {
      $this->dmsAngle = $dmsAngle;
      return $this;
    }

}
