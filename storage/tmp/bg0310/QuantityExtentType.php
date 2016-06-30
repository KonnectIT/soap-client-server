<?php

class QuantityExtentType
{

    /**
     * @var MeasureOrNullListType $_
     */
    protected $_ = null;

    /**
     * @param MeasureOrNullListType $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return MeasureOrNullListType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param MeasureOrNullListType $_
     * @return QuantityExtentType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
