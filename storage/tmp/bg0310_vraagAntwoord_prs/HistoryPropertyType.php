<?php

namespace RRSVP\Stuf;

class HistoryPropertyType
{

    /**
     * @var AbstractTimeSliceType $_TimeSlice
     */
    protected $_TimeSlice = null;

    /**
     * @param AbstractTimeSliceType $_TimeSlice
     */
    public function __construct($_TimeSlice)
    {
      $this->_TimeSlice = $_TimeSlice;
    }

    /**
     * @return AbstractTimeSliceType
     */
    public function get_TimeSlice()
    {
      return $this->_TimeSlice;
    }

    /**
     * @param AbstractTimeSliceType $_TimeSlice
     * @return \RRSVP\Stuf\HistoryPropertyType
     */
    public function set_TimeSlice($_TimeSlice)
    {
      $this->_TimeSlice = $_TimeSlice;
      return $this;
    }

}
