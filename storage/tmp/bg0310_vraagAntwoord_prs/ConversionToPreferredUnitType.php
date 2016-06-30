<?php

namespace RRSVP\Stuf;

class ConversionToPreferredUnitType extends UnitOfMeasureType
{

    /**
     * @var float $factor
     */
    protected $factor = null;

    /**
     * @var FormulaType $formula
     */
    protected $formula = null;

    /**
     * @param anyURI $uom
     * @param float $factor
     * @param FormulaType $formula
     */
    public function __construct($uom, $factor, $formula)
    {
      parent::__construct($uom);
      $this->factor = $factor;
      $this->formula = $formula;
    }

    /**
     * @return float
     */
    public function getFactor()
    {
      return $this->factor;
    }

    /**
     * @param float $factor
     * @return \RRSVP\Stuf\ConversionToPreferredUnitType
     */
    public function setFactor($factor)
    {
      $this->factor = $factor;
      return $this;
    }

    /**
     * @return FormulaType
     */
    public function getFormula()
    {
      return $this->formula;
    }

    /**
     * @param FormulaType $formula
     * @return \RRSVP\Stuf\ConversionToPreferredUnitType
     */
    public function setFormula($formula)
    {
      $this->formula = $formula;
      return $this;
    }

}
