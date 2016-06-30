<?php

namespace RRSVP\Stuf;

class CovarianceMatrixType extends AbstractPositionalAccuracyType
{

    /**
     * @var UnitOfMeasureType $unitOfMeasure
     */
    protected $unitOfMeasure = null;

    /**
     * @var CovarianceElementType $includesElement
     */
    protected $includesElement = null;

    /**
     * @param CodeType $measureDescription
     * @param UnitOfMeasureType $unitOfMeasure
     * @param CovarianceElementType $includesElement
     */
    public function __construct($measureDescription, $unitOfMeasure, $includesElement)
    {
      parent::__construct($measureDescription);
      $this->unitOfMeasure = $unitOfMeasure;
      $this->includesElement = $includesElement;
    }

    /**
     * @return UnitOfMeasureType
     */
    public function getUnitOfMeasure()
    {
      return $this->unitOfMeasure;
    }

    /**
     * @param UnitOfMeasureType $unitOfMeasure
     * @return \RRSVP\Stuf\CovarianceMatrixType
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
      $this->unitOfMeasure = $unitOfMeasure;
      return $this;
    }

    /**
     * @return CovarianceElementType
     */
    public function getIncludesElement()
    {
      return $this->includesElement;
    }

    /**
     * @param CovarianceElementType $includesElement
     * @return \RRSVP\Stuf\CovarianceMatrixType
     */
    public function setIncludesElement($includesElement)
    {
      $this->includesElement = $includesElement;
      return $this;
    }

}
