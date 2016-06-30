<?php

class TijdvakObjectZonderIndicator
{

    /**
     * @var Datume $beginObject
     */
    protected $beginObject = null;

    /**
     * @var Datume $eindObject
     */
    protected $eindObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Datume
     */
    public function getBeginObject()
    {
      return $this->beginObject;
    }

    /**
     * @param Datume $beginObject
     * @return TijdvakObjectZonderIndicator
     */
    public function setBeginObject($beginObject)
    {
      $this->beginObject = $beginObject;
      return $this;
    }

    /**
     * @return Datume
     */
    public function getEindObject()
    {
      return $this->eindObject;
    }

    /**
     * @param Datume $eindObject
     * @return TijdvakObjectZonderIndicator
     */
    public function setEindObject($eindObject)
    {
      $this->eindObject = $eindObject;
      return $this;
    }

}
