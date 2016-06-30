<?php

class AbstractGriddedSurfaceType extends AbstractParametricCurveSurfaceType
{

    /**
     * @var row $row
     */
    protected $row = null;

    /**
     * @var int $rows
     */
    protected $rows = null;

    /**
     * @var int $columns
     */
    protected $columns = null;

    /**
     * @param row $row
     */
    public function __construct($row)
    {
      $this->row = $row;
    }

    /**
     * @return row
     */
    public function getRow()
    {
      return $this->row;
    }

    /**
     * @param row $row
     * @return AbstractGriddedSurfaceType
     */
    public function setRow($row)
    {
      $this->row = $row;
      return $this;
    }

    /**
     * @return int
     */
    public function getRows()
    {
      return $this->rows;
    }

    /**
     * @param int $rows
     * @return AbstractGriddedSurfaceType
     */
    public function setRows($rows)
    {
      $this->rows = $rows;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param int $columns
     * @return AbstractGriddedSurfaceType
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

}
