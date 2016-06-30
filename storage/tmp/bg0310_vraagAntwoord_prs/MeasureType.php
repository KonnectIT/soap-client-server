<?php

namespace RRSVP\Stuf;

class MeasureType
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param float $_
     * @param anyURI $uom
     */
    public function __construct($_, $uom)
    {
      $this->_ = $_;
      $this->uom = $uom;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return \RRSVP\Stuf\MeasureType
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
     * @return \RRSVP\Stuf\MeasureType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
