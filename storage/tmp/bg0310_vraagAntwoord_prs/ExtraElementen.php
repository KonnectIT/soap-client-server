<?php

namespace RRSVP\Stuf;

class ExtraElementen
{

    /**
     * @var extraElement[] $extraElement
     */
    protected $extraElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return extraElement[]
     */
    public function getExtraElement()
    {
      return $this->extraElement;
    }

    /**
     * @param extraElement[] $extraElement
     * @return \RRSVP\Stuf\ExtraElementen
     */
    public function setExtraElement(array $extraElement = null)
    {
      $this->extraElement = $extraElement;
      return $this;
    }

}
