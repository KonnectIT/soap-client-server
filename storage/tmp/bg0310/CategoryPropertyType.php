<?php

class CategoryPropertyType
{

    /**
     * @var CodeType $Category
     */
    protected $Category = null;

    /**
     * @param CodeType $Category
     */
    public function __construct($Category)
    {
      $this->Category = $Category;
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
     * @return CategoryPropertyType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
