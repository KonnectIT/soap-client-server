<?php

class ConversionRateResponse
{

    /**
     * @var float $ConversionRateResult
     */
    protected $ConversionRateResult = null;

    /**
     * @param float $ConversionRateResult
     */
    public function __construct($ConversionRateResult)
    {
      $this->ConversionRateResult = $ConversionRateResult;
    }

    /**
     * @return float
     */
    public function getConversionRateResult()
    {
      return $this->ConversionRateResult;
    }

    /**
     * @param float $ConversionRateResult
     * @return ConversionRateResponse
     */
    public function setConversionRateResult($ConversionRateResult)
    {
      $this->ConversionRateResult = $ConversionRateResult;
      return $this;
    }

}
