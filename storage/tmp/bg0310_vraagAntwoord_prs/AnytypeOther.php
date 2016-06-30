<?php

namespace RRSVP\Stuf;

class AnytypeOther
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \RRSVP\Stuf\AnytypeOther
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
