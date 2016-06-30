<?php

namespace RRSVP\Stuf;

class titleEltType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var anonymous1248 $lang
     */
    protected $lang = null;

    /**
     * @param string $any
     * @param typeType $type
     * @param anonymous1248 $lang
     */
    public function __construct($any, $type, $lang)
    {
      $this->any = $any;
      $this->type = $type;
      $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \RRSVP\Stuf\titleEltType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return typeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param typeType $type
     * @return \RRSVP\Stuf\titleEltType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return anonymous1248
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param anonymous1248 $lang
     * @return \RRSVP\Stuf\titleEltType
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
