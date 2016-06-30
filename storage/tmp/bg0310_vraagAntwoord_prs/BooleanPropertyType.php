<?php

namespace RRSVP\Stuf;

class BooleanPropertyType
{

    /**
     * @var boolean $Boolean
     */
    protected $Boolean = null;

    /**
     * @param boolean $Boolean
     */
    public function __construct($Boolean)
    {
      $this->Boolean = $Boolean;
    }

    /**
     * @return boolean
     */
    public function getBoolean()
    {
      return $this->Boolean;
    }

    /**
     * @param boolean $Boolean
     * @return \RRSVP\Stuf\BooleanPropertyType
     */
    public function setBoolean($Boolean)
    {
      $this->Boolean = $Boolean;
      return $this;
    }

}
