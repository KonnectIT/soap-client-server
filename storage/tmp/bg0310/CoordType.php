<?php

class CoordType
{

    /**
     * @var float $X
     */
    protected $X = null;

    /**
     * @var float $Y
     */
    protected $Y = null;

    /**
     * @var float $Z
     */
    protected $Z = null;

    /**
     * @param float $X
     */
    public function __construct($X)
    {
      $this->X = $X;
    }

    /**
     * @return float
     */
    public function getX()
    {
      return $this->X;
    }

    /**
     * @param float $X
     * @return CoordType
     */
    public function setX($X)
    {
      $this->X = $X;
      return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param float $Y
     * @return CoordType
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

    /**
     * @return float
     */
    public function getZ()
    {
      return $this->Z;
    }

    /**
     * @param float $Z
     * @return CoordType
     */
    public function setZ($Z)
    {
      $this->Z = $Z;
      return $this;
    }

}
