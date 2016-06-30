<?php

namespace RRSVP\Stuf;

class TijdvakObject
{

    /**
     * @var DatumMetIndicator $beginObject
     */
    protected $beginObject = null;

    /**
     * @var DatumMetIndicator $eindObject
     */
    protected $eindObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DatumMetIndicator
     */
    public function getBeginObject()
    {
      return $this->beginObject;
    }

    /**
     * @param DatumMetIndicator $beginObject
     * @return \RRSVP\Stuf\TijdvakObject
     */
    public function setBeginObject($beginObject)
    {
      $this->beginObject = $beginObject;
      return $this;
    }

    /**
     * @return DatumMetIndicator
     */
    public function getEindObject()
    {
      return $this->eindObject;
    }

    /**
     * @param DatumMetIndicator $eindObject
     * @return \RRSVP\Stuf\TijdvakObject
     */
    public function setEindObject($eindObject)
    {
      $this->eindObject = $eindObject;
      return $this;
    }

}
