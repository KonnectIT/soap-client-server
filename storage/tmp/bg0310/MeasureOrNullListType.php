<?php

class MeasureOrNullListType
{

    /**
     * @var doubleOrNullList $_
     */
    protected $_ = null;

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param doubleOrNullList $_
     * @param anyURI $uom
     */
    public function __construct($_, $uom)
    {
      $this->_ = $_;
      $this->uom = $uom;
    }

    /**
     * @return doubleOrNullList
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param doubleOrNullList $_
     * @return MeasureOrNullListType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUom()
    {
      return $this->uom;
    }

    /**
     * @param anyURI $uom
     * @return MeasureOrNullListType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
