<?php

class TrackType
{

    /**
     * @var MovingObjectStatusType $MovingObjectStatus
     */
    protected $MovingObjectStatus = null;

    /**
     * @param MovingObjectStatusType $MovingObjectStatus
     */
    public function __construct($MovingObjectStatus)
    {
      $this->MovingObjectStatus = $MovingObjectStatus;
    }

    /**
     * @return MovingObjectStatusType
     */
    public function getMovingObjectStatus()
    {
      return $this->MovingObjectStatus;
    }

    /**
     * @param MovingObjectStatusType $MovingObjectStatus
     * @return TrackType
     */
    public function setMovingObjectStatus($MovingObjectStatus)
    {
      $this->MovingObjectStatus = $MovingObjectStatus;
      return $this;
    }

}
