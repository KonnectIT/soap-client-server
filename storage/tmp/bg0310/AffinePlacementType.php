<?php

class AffinePlacementType
{

    /**
     * @var DirectPositionType $location
     */
    protected $location = null;

    /**
     * @var VectorType[] $refDirection
     */
    protected $refDirection = null;

    /**
     * @var int $inDimension
     */
    protected $inDimension = null;

    /**
     * @var int $outDimension
     */
    protected $outDimension = null;

    /**
     * @param DirectPositionType $location
     * @param VectorType[] $refDirection
     * @param int $inDimension
     * @param int $outDimension
     */
    public function __construct($location, array $refDirection, $inDimension, $outDimension)
    {
      $this->location = $location;
      $this->refDirection = $refDirection;
      $this->inDimension = $inDimension;
      $this->outDimension = $outDimension;
    }

    /**
     * @return DirectPositionType
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param DirectPositionType $location
     * @return AffinePlacementType
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return VectorType[]
     */
    public function getRefDirection()
    {
      return $this->refDirection;
    }

    /**
     * @param VectorType[] $refDirection
     * @return AffinePlacementType
     */
    public function setRefDirection(array $refDirection)
    {
      $this->refDirection = $refDirection;
      return $this;
    }

    /**
     * @return int
     */
    public function getInDimension()
    {
      return $this->inDimension;
    }

    /**
     * @param int $inDimension
     * @return AffinePlacementType
     */
    public function setInDimension($inDimension)
    {
      $this->inDimension = $inDimension;
      return $this;
    }

    /**
     * @return int
     */
    public function getOutDimension()
    {
      return $this->outDimension;
    }

    /**
     * @param int $outDimension
     * @return AffinePlacementType
     */
    public function setOutDimension($outDimension)
    {
      $this->outDimension = $outDimension;
      return $this;
    }

}
