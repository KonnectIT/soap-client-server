<?php

class setPrototype
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
     * @var string $to
     */
    protected $to = null;

    /**
     * @param string $attributeName
     * @param anonymous1639 $attributeType
     * @param string $to
     */
    public function __construct($attributeName, $attributeType, $to)
    {
      $this->attributeName = $attributeName;
      $this->attributeType = $attributeType;
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
     * @return setPrototype
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
     * @return setPrototype
     */
    public function setAttributeType($attributeType)
    {
      $this->attributeType = $attributeType;
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
     * @return setPrototype
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
