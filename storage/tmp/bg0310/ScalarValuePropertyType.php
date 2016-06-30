<?php

class ScalarValuePropertyType
{

    /**
     * @var boolean $Boolean
     */
    protected $Boolean = null;

    /**
     * @var CodeType $Category
     */
    protected $Category = null;

    /**
     * @var MeasureType $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param boolean $Boolean
     * @param CodeType $Category
     * @param MeasureType $Quantity
     * @param int $Count
     */
    public function __construct($Boolean, $Category, $Quantity, $Count)
    {
      $this->Boolean = $Boolean;
      $this->Category = $Category;
      $this->Quantity = $Quantity;
      $this->Count = $Count;
    }

    /**
     * @return boolean
     */
    public function getBoolean()
    {
      return $this->Boolean;
    }

    /**
     * @param boolean $Boolean
     * @return ScalarValuePropertyType
     */
    public function setBoolean($Boolean)
    {
      $this->Boolean = $Boolean;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CodeType $Category
     * @return ScalarValuePropertyType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param MeasureType $Quantity
     * @return ScalarValuePropertyType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return ScalarValuePropertyType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
