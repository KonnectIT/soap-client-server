<?php

class TopoVolumePropertyType
{

    /**
     * @var TopoVolumeType $TopoVolume
     */
    protected $TopoVolume = null;

    /**
     * @param TopoVolumeType $TopoVolume
     */
    public function __construct($TopoVolume)
    {
      $this->TopoVolume = $TopoVolume;
    }

    /**
     * @return TopoVolumeType
     */
    public function getTopoVolume()
    {
      return $this->TopoVolume;
    }

    /**
     * @param TopoVolumeType $TopoVolume
     * @return TopoVolumePropertyType
     */
    public function setTopoVolume($TopoVolume)
    {
      $this->TopoVolume = $TopoVolume;
      return $this;
    }

}
