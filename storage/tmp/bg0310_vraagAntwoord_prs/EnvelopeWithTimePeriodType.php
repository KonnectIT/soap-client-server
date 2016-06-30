<?php

namespace RRSVP\Stuf;

class EnvelopeWithTimePeriodType extends EnvelopeType
{

    /**
     * @var TimePositionType $timePosition
     */
    protected $timePosition = null;

    /**
     * @var anyURI $frame
     */
    protected $frame = null;

    /**
     * @param DirectPositionType $lowerCorner
     * @param DirectPositionType $upperCorner
     * @param CoordType $coord
     * @param DirectPositionType $pos
     * @param CoordinatesType $coordinates
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     * @param TimePositionType $timePosition
     * @param anyURI $frame
     */
    public function __construct($lowerCorner, $upperCorner, $coord, $pos, $coordinates, $srsName, $srsDimension, $axisLabels, $uomLabels, $timePosition, $frame)
    {
      parent::__construct($lowerCorner, $upperCorner, $coord, $pos, $coordinates, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->timePosition = $timePosition;
      $this->frame = $frame;
    }

    /**
     * @return TimePositionType
     */
    public function getTimePosition()
    {
      return $this->timePosition;
    }

    /**
     * @param TimePositionType $timePosition
     * @return \RRSVP\Stuf\EnvelopeWithTimePeriodType
     */
    public function setTimePosition($timePosition)
    {
      $this->timePosition = $timePosition;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getFrame()
    {
      return $this->frame;
    }

    /**
     * @param anyURI $frame
     * @return \RRSVP\Stuf\EnvelopeWithTimePeriodType
     */
    public function setFrame($frame)
    {
      $this->frame = $frame;
      return $this;
    }

}
