<?php

class antwoord
{

    /**
     * @var VESantwoordprsr $object
     */
    protected $object = null;

    /**
     * @param VESantwoordprsr $object
     */
    public function __construct($object)
    {
      $this->object = $object;
    }

    /**
     * @return VESantwoordprsr
     */
    public function getObject()
    {
      return $this->object;
    }

    /**
     * @param VESantwoordprsr $object
     * @return antwoord
     */
    public function setObject($object)
    {
      $this->object = $object;
      return $this;
    }

}
