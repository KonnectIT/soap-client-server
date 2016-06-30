<?php

namespace RRSVP\Stuf;

class QuantityPropertyType
{

    /**
     * @var MeasureType $Quantity
     */
    protected $Quantity = null;

    /**
     * @param MeasureType $Quantity
     */
    public function __construct($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \RRSVP\Stuf\QuantityPropertyType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
