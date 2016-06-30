<?php

class FormulaType
{

    /**
     * @var float $a
     */
    protected $a = null;

    /**
     * @var float $b
     */
    protected $b = null;

    /**
     * @var float $c
     */
    protected $c = null;

    /**
     * @var float $d
     */
    protected $d = null;

    /**
     * @param float $b
     * @param float $c
     */
    public function __construct($b, $c)
    {
      $this->b = $b;
      $this->c = $c;
    }

    /**
     * @return float
     */
    public function getA()
    {
      return $this->a;
    }

    /**
     * @param float $a
     * @return FormulaType
     */
    public function setA($a)
    {
      $this->a = $a;
      return $this;
    }

    /**
     * @return float
     */
    public function getB()
    {
      return $this->b;
    }

    /**
     * @param float $b
     * @return FormulaType
     */
    public function setB($b)
    {
      $this->b = $b;
      return $this;
    }

    /**
     * @return float
     */
    public function getC()
    {
      return $this->c;
    }

    /**
     * @param float $c
     * @return FormulaType
     */
    public function setC($c)
    {
      $this->c = $c;
      return $this;
    }

    /**
     * @return float
     */
    public function getD()
    {
      return $this->d;
    }

    /**
     * @param float $d
     * @return FormulaType
     */
    public function setD($d)
    {
      $this->d = $d;
      return $this;
    }

}
