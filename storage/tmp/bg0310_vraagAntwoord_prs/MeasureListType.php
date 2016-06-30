<?php

namespace RRSVP\Stuf;

class MeasureListType
{

    /**
     * @var doubleList $_
     */
    protected $_ = null;

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param doubleList $_
     * @param anyURI $uom
     */
    public function __construct($_, $uom)
    {
      $this->_ = $_;
      $this->uom = $uom;
    }

    /**
     * @return doubleList
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param doubleList $_
     * @return \RRSVP\Stuf\MeasureListType
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
     * @return \RRSVP\Stuf\MeasureListType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
