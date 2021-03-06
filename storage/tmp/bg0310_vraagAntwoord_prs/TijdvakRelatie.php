<?php

namespace RRSVP\Stuf;

class TijdvakRelatie
{

    /**
     * @var TijdstipMetIndicator $beginRelatie
     */
    protected $beginRelatie = null;

    /**
     * @var TijdstipMetIndicator $eindRelatie
     */
    protected $eindRelatie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TijdstipMetIndicator
     */
    public function getBeginRelatie()
    {
      return $this->beginRelatie;
    }

    /**
     * @param TijdstipMetIndicator $beginRelatie
     * @return \RRSVP\Stuf\TijdvakRelatie
     */
    public function setBeginRelatie($beginRelatie)
    {
      $this->beginRelatie = $beginRelatie;
      return $this;
    }

    /**
     * @return TijdstipMetIndicator
     */
    public function getEindRelatie()
    {
      return $this->eindRelatie;
    }

    /**
     * @param TijdstipMetIndicator $eindRelatie
     * @return \RRSVP\Stuf\TijdvakRelatie
     */
    public function setEindRelatie($eindRelatie)
    {
      $this->eindRelatie = $eindRelatie;
      return $this;
    }

}
