<?php

class animateColorPrototype
{

    /**
     * @var string $attributeName
     */
    protected $attributeName = null;

    /**
     * @var anonymous1639 $attributeType
     */
    protected $attributeType = null;

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
     * @param string $attributeName
     * @param anonymous1639 $attributeType
     * @param anonymous1640 $additive
     * @param anonymous1641 $accumulate
     * @param string $from
     * @param string $by
     * @param string $values
     * @param string $to
     */
    public function __construct($attributeName, $attributeType, $additive, $accumulate, $from, $by, $values, $to)
    {
      $this->attributeName = $attributeName;
      $this->attributeType = $attributeType;
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
    public function getAttributeName()
    {
      return $this->attributeName;
    }

    /**
     * @param string $attributeName
     * @return animateColorPrototype
     */
    public function setAttributeName($attributeName)
    {
      $this->attributeName = $attributeName;
      return $this;
    }

    /**
     * @return anonymous1639
     */
    public function getAttributeType()
    {
      return $this->attributeType;
    }

    /**
     * @param anonymous1639 $attributeType
     * @return animateColorPrototype
     */
    public function setAttributeType($attributeType)
    {
      $this->attributeType = $attributeType;
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
     * @return animateColorPrototype
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
     * @return animateColorPrototype
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
     * @return animateColorPrototype
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
     * @return animateColorPrototype
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
     * @return animateColorPrototype
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
     * @return animateColorPrototype
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
