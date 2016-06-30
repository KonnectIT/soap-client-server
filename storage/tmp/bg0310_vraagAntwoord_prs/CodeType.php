<?php

namespace RRSVP\Stuf;

class CodeType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anyURI $codeSpace
     */
    protected $codeSpace = null;

    /**
     * @param string $_
     * @param anyURI $codeSpace
     */
    public function __construct($_, $codeSpace)
    {
      $this->_ = $_;
      $this->codeSpace = $codeSpace;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \RRSVP\Stuf\CodeType
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
     * @return \RRSVP\Stuf\CodeType
     */
    public function setCodeSpace($codeSpace)
    {
      $this->codeSpace = $codeSpace;
      return $this;
    }

}
