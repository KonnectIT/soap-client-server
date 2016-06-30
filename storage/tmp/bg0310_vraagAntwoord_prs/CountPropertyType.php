<?php

namespace RRSVP\Stuf;

class CountPropertyType
{

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param int $Count
     */
    public function __construct($Count)
    {
      $this->Count = $Count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \RRSVP\Stuf\CountPropertyType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
