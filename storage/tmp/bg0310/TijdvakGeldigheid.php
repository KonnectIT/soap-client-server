<?php

class TijdvakGeldigheid
{

    /**
     * @var TijdstipMetIndicator $beginGeldigheid
     */
    protected $beginGeldigheid = null;

    /**
     * @var TijdstipMetIndicator $eindGeldigheid
     */
    protected $eindGeldigheid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TijdstipMetIndicator
     */
    public function getBeginGeldigheid()
    {
      return $this->beginGeldigheid;
    }

    /**
     * @param TijdstipMetIndicator $beginGeldigheid
     * @return TijdvakGeldigheid
     */
    public function setBeginGeldigheid($beginGeldigheid)
    {
      $this->beginGeldigheid = $beginGeldigheid;
      return $this;
    }

    /**
     * @return TijdstipMetIndicator
     */
    public function getEindGeldigheid()
    {
      return $this->eindGeldigheid;
    }

    /**
     * @param TijdstipMetIndicator $eindGeldigheid
     * @return TijdvakGeldigheid
     */
    public function setEindGeldigheid($eindGeldigheid)
    {
      $this->eindGeldigheid = $eindGeldigheid;
      return $this;
    }

}
