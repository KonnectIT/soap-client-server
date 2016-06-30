<?php

namespace RRSVP\Stuf;

class PixelInCellType
{

    /**
     * @var CodeType $_
     */
    protected $_ = null;

    /**
     * @var anyURI $codeSpace
     */
    protected $codeSpace = null;

    /**
     * @param CodeType $_
     * @param anyURI $codeSpace
     */
    public function __construct($_, $codeSpace)
    {
      $this->_ = $_;
      $this->codeSpace = $codeSpace;
    }

    /**
     * @return CodeType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CodeType $_
     * @return \RRSVP\Stuf\PixelInCellType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getCodeSpace()
    {
      return $this->codeSpace;
    }

    /**
     * @param anyURI $codeSpace
     * @return \RRSVP\Stuf\PixelInCellType
     */
    public function setCodeSpace($codeSpace)
    {
      $this->codeSpace = $codeSpace;
      return $this;
    }

}
