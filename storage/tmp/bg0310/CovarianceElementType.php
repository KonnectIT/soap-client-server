<?php

class CovarianceElementType
{

    /**
     * @var int $rowIndex
     */
    protected $rowIndex = null;

    /**
     * @var int $columnIndex
     */
    protected $columnIndex = null;

    /**
     * @var float $covariance
     */
    protected $covariance = null;

    /**
     * @param int $rowIndex
     * @param int $columnIndex
     * @param float $covariance
     */
    public function __construct($rowIndex, $columnIndex, $covariance)
    {
      $this->rowIndex = $rowIndex;
      $this->columnIndex = $columnIndex;
      $this->covariance = $covariance;
    }

    /**
     * @return int
     */
    public function getRowIndex()
    {
      return $this->rowIndex;
    }

    /**
     * @param int $rowIndex
     * @return CovarianceElementType
     */
    public function setRowIndex($rowIndex)
    {
      $this->rowIndex = $rowIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumnIndex()
    {
      return $this->columnIndex;
    }

    /**
     * @param int $columnIndex
     * @return CovarianceElementType
     */
    public function setColumnIndex($columnIndex)
    {
      $this->columnIndex = $columnIndex;
      return $this;
    }

    /**
     * @return float
     */
    public function getCovariance()
    {
      return $this->covariance;
    }

    /**
     * @param float $covariance
     * @return CovarianceElementType
     */
    public function setCovariance($covariance)
    {
      $this->covariance = $covariance;
      return $this;
    }

}
