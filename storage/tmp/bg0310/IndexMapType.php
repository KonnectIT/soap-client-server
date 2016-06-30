<?php

class IndexMapType extends GridFunctionType
{

    /**
     * @var integerList $lookUpTable
     */
    protected $lookUpTable = null;

    /**
     * @param integerList $lookUpTable
     */
    public function __construct($lookUpTable)
    {
      parent::__construct();
      $this->lookUpTable = $lookUpTable;
    }

    /**
     * @return integerList
     */
    public function getLookUpTable()
    {
      return $this->lookUpTable;
    }

    /**
     * @param integerList $lookUpTable
     * @return IndexMapType
     */
    public function setLookUpTable($lookUpTable)
    {
      $this->lookUpTable = $lookUpTable;
      return $this;
    }

}
