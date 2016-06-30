<?php

namespace RRSVP\Stuf;

class GenericMetaDataType extends AbstractMetaDataType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ID $id
     * @param string $any
     */
    public function __construct($id, $any)
    {
      parent::__construct($id);
      $this->any = $any;
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
     * @return \RRSVP\Stuf\GenericMetaDataType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
