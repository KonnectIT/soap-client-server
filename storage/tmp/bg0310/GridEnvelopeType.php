<?php

class GridEnvelopeType
{

    /**
     * @var integerList $low
     */
    protected $low = null;

    /**
     * @var integerList $high
     */
    protected $high = null;

    /**
     * @param integerList $low
     * @param integerList $high
     */
    public function __construct($low, $high)
    {
      $this->low = $low;
      $this->high = $high;
    }

    /**
     * @return integerList
     */
    public function getLow()
    {
      return $this->low;
    }

    /**
     * @param integerList $low
     * @return GridEnvelopeType
     */
    public function setLow($low)
    {
      $this->low = $low;
      return $this;
    }

    /**
     * @return integerList
     */
    public function getHigh()
    {
      return $this->high;
    }

    /**
     * @param integerList $high
     * @return GridEnvelopeType
     */
    public function setHigh($high)
    {
      $this->high = $high;
      return $this;
    }

}
