<?php

class CodeOrNullListType
{

    /**
     * @var NameOrNullList $_
     */
    protected $_ = null;

    /**
     * @var anyURI $codeSpace
     */
    protected $codeSpace = null;

    /**
     * @param NameOrNullList $_
     * @param anyURI $codeSpace
     */
    public function __construct($_, $codeSpace)
    {
      $this->_ = $_;
      $this->codeSpace = $codeSpace;
    }

    /**
     * @return NameOrNullList
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param NameOrNullList $_
     * @return CodeOrNullListType
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
     * @return CodeOrNullListType
     */
    public function setCodeSpace($codeSpace)
    {
      $this->codeSpace = $codeSpace;
      return $this;
    }

}
