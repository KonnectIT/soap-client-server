<?php

namespace RRSVP\Stuf;

class hexBinary
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous204 $contentType
     */
    protected $contentType = null;

    /**
     * @param string $_
     * @param anonymous204 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
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
     * @return \RRSVP\Stuf\hexBinary
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous204
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous204 $contentType
     * @return \RRSVP\Stuf\hexBinary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
