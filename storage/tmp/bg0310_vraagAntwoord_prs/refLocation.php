<?php

namespace RRSVP\Stuf;

class refLocation
{

    /**
     * @var AffinePlacementType $AffinePlacement
     */
    protected $AffinePlacement = null;

    /**
     * @param AffinePlacementType $AffinePlacement
     */
    public function __construct($AffinePlacement)
    {
      $this->AffinePlacement = $AffinePlacement;
    }

    /**
     * @return AffinePlacementType
     */
    public function getAffinePlacement()
    {
      return $this->AffinePlacement;
    }

    /**
     * @param AffinePlacementType $AffinePlacement
     * @return \RRSVP\Stuf\refLocation
     */
    public function setAffinePlacement($AffinePlacement)
    {
      $this->AffinePlacement = $AffinePlacement;
      return $this;
    }

}
