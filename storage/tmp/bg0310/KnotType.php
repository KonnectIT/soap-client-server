<?php

class KnotType
{

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @var int $multiplicity
     */
    protected $multiplicity = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @param float $value
     * @param int $multiplicity
     * @param float $weight
     */
    public function __construct($value, $multiplicity, $weight)
    {
      $this->value = $value;
      $this->multiplicity = $multiplicity;
      $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return KnotType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return int
     */
    public function getMultiplicity()
    {
      return $this->multiplicity;
    }

    /**
     * @param int $multiplicity
     * @return KnotType
     */
    public function setMultiplicity($multiplicity)
    {
      $this->multiplicity = $multiplicity;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return KnotType
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

}
