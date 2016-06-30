<?php

class TimePositionType
{

    /**
     * @var TimePositionUnion $_
     */
    protected $_ = null;

    /**
     * @var anyURI $frame
     */
    protected $frame = null;

    /**
     * @var string $calendarEraName
     */
    protected $calendarEraName = null;

    /**
     * @var TimeIndeterminateValueType $indeterminatePosition
     */
    protected $indeterminatePosition = null;

    /**
     * @param TimePositionUnion $_
     * @param anyURI $frame
     * @param string $calendarEraName
     * @param TimeIndeterminateValueType $indeterminatePosition
     */
    public function __construct($_, $frame, $calendarEraName, $indeterminatePosition)
    {
      $this->_ = $_;
      $this->frame = $frame;
      $this->calendarEraName = $calendarEraName;
      $this->indeterminatePosition = $indeterminatePosition;
    }

    /**
     * @return TimePositionUnion
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param TimePositionUnion $_
     * @return TimePositionType
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return TimePositionType
     */
    public function setFrame($frame)
    {
      $this->frame = $frame;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalendarEraName()
    {
      return $this->calendarEraName;
    }

    /**
     * @param string $calendarEraName
     * @return TimePositionType
     */
    public function setCalendarEraName($calendarEraName)
    {
      $this->calendarEraName = $calendarEraName;
      return $this;
    }

    /**
     * @return TimeIndeterminateValueType
     */
    public function getIndeterminatePosition()
    {
      return $this->indeterminatePosition;
    }

    /**
     * @param TimeIndeterminateValueType $indeterminatePosition
     * @return TimePositionType
     */
    public function setIndeterminatePosition($indeterminatePosition)
    {
      $this->indeterminatePosition = $indeterminatePosition;
      return $this;
    }

}
