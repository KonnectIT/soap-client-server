<?php

class RingPropertyType
{

    /**
     * @var RingType $Ring
     */
    protected $Ring = null;

    /**
     * @param RingType $Ring
     */
    public function __construct($Ring)
    {
      $this->Ring = $Ring;
    }

    /**
     * @return RingType
     */
    public function getRing()
    {
      return $this->Ring;
    }

    /**
     * @param RingType $Ring
     * @return RingPropertyType
     */
    public function setRing($Ring)
    {
      $this->Ring = $Ring;
      return $this;
    }

}
