<?php

namespace RRSVP\Stuf;

class VolumeType
{

    /**
     * @var MeasureType $_
     */
    protected $_ = null;

    /**
     * @param MeasureType $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return MeasureType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param MeasureType $_
     * @return \RRSVP\Stuf\VolumeType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
