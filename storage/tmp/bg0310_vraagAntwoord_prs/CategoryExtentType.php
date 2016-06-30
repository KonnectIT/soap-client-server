<?php

namespace RRSVP\Stuf;

class CategoryExtentType
{

    /**
     * @var CodeOrNullListType $_
     */
    protected $_ = null;

    /**
     * @param CodeOrNullListType $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return CodeOrNullListType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CodeOrNullListType $_
     * @return \RRSVP\Stuf\CategoryExtentType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
