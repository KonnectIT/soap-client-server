<?php

namespace RRSVP\Stuf;

class FeatureArrayPropertyType
{

    /**
     * @var AbstractFeatureType $_Feature
     */
    protected $_Feature = null;

    /**
     * @param AbstractFeatureType $_Feature
     */
    public function __construct($_Feature)
    {
      $this->_Feature = $_Feature;
    }

    /**
     * @return AbstractFeatureType
     */
    public function get_Feature()
    {
      return $this->_Feature;
    }

    /**
     * @param AbstractFeatureType $_Feature
     * @return \RRSVP\Stuf\FeatureArrayPropertyType
     */
    public function set_Feature($_Feature)
    {
      $this->_Feature = $_Feature;
      return $this;
    }

}
