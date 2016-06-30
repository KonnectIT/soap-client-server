<?php

namespace RRSVP\Stuf;

class base64Binary
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var anonymous204 $contentType
     */
    protected $contentType = null;

    /**
     * @param base64Binary $_
     * @param anonymous204 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return \RRSVP\Stuf\base64Binary
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
     * @return \RRSVP\Stuf\base64Binary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
