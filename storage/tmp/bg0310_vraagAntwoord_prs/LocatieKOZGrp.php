<?php

namespace RRSVP\Stuf;

class LocatieKOZGrp
{

    /**
     * @var LocatieOmschrijvingKOZe $locatieOmschrijving
     */
    protected $locatieOmschrijving = null;

    /**
     * @var CultuurBebouwde $cultuurBebouwd
     */
    protected $cultuurBebouwd = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocatieOmschrijvingKOZe
     */
    public function getLocatieOmschrijving()
    {
      return $this->locatieOmschrijving;
    }

    /**
     * @param LocatieOmschrijvingKOZe $locatieOmschrijving
     * @return \RRSVP\Stuf\LocatieKOZGrp
     */
    public function setLocatieOmschrijving($locatieOmschrijving)
    {
      $this->locatieOmschrijving = $locatieOmschrijving;
      return $this;
    }

    /**
     * @return CultuurBebouwde
     */
    public function getCultuurBebouwd()
    {
      return $this->cultuurBebouwd;
    }

    /**
     * @param CultuurBebouwde $cultuurBebouwd
     * @return \RRSVP\Stuf\LocatieKOZGrp
     */
    public function setCultuurBebouwd($cultuurBebouwd)
    {
      $this->cultuurBebouwd = $cultuurBebouwd;
      return $this;
    }

}
