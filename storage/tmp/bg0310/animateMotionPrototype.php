<?php

class animateMotionPrototype
{

    /**
     * @var string $origin
     */
    protected $origin = null;

    /**
     * @var anonymous1640 $additive
     */
    protected $additive = null;

    /**
     * @var anonymous1641 $accumulate
     */
    protected $accumulate = null;

    /**
     * @var string $from
     */
    protected $from = null;

    /**
     * @var string $by
     */
    protected $by = null;

    /**
     * @var string $values
     */
    protected $values = null;

    /**
     * @var string $to
     */
    protected $to = null;

    /**
     * @param string $origin
     * @param anonymous1640 $additive
     * @param anonymous1641 $accumulate
     * @param string $from
     * @param string $by
     * @param string $values
     * @param string $to
     */
    public function __construct($origin, $additive, $accumulate, $from, $by, $values, $to)
    {
      $this->origin = $origin;
      $this->additive = $additive;
      $this->accumulate = $accumulate;
      $this->from = $from;
      $this->by = $by;
      $this->values = $values;
      $this->to = $to;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param string $origin
     * @return animateMotionPrototype
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return anonymous1640
     */
    public function getAdditive()
    {
      return $this->additive;
    }

    /**
     * @param anonymous1640 $additive
     * @return animateMotionPrototype
     */
    public function setAdditive($additive)
    {
      $this->additive = $additive;
      return $this;
    }

    /**
     * @return anonymous1641
     */
    public function getAccumulate()
    {
      return $this->accumulate;
    }

    /**
     * @param anonymous1641 $accumulate
     * @return animateMotionPrototype
     */
    public function setAccumulate($accumulate)
    {
      $this->accumulate = $accumulate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param string $from
     * @return animateMotionPrototype
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return string
     */
    public function getBy()
    {
      return $this->by;
    }

    /**
     * @param string $by
     * @return animateMotionPrototype
     */
    public function setBy($by)
    {
      $this->by = $by;
      return $this;
    }

    /**
     * @return string
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string $values
     * @return animateMotionPrototype
     */
    public function setValues($values)
    {
      $this->values = $values;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param string $to
     * @return animateMotionPrototype
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
