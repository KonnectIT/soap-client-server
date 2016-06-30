<?php

namespace RRSVP\Stuf;

class Systeem
{

    /**
     * @var Organisatie $organisatie
     */
    protected $organisatie = null;

    /**
     * @var Applicatie $applicatie
     */
    protected $applicatie = null;

    /**
     * @var Administratie $administratie
     */
    protected $administratie = null;

    /**
     * @var Gebruiker $gebruiker
     */
    protected $gebruiker = null;

    /**
     * @param Applicatie $applicatie
     */
    public function __construct($applicatie)
    {
      $this->applicatie = $applicatie;
    }

    /**
     * @return Organisatie
     */
    public function getOrganisatie()
    {
      return $this->organisatie;
    }

    /**
     * @param Organisatie $organisatie
     * @return \RRSVP\Stuf\Systeem
     */
    public function setOrganisatie($organisatie)
    {
      $this->organisatie = $organisatie;
      return $this;
    }

    /**
     * @return Applicatie
     */
    public function getApplicatie()
    {
      return $this->applicatie;
    }

    /**
     * @param Applicatie $applicatie
     * @return \RRSVP\Stuf\Systeem
     */
    public function setApplicatie($applicatie)
    {
      $this->applicatie = $applicatie;
      return $this;
    }

    /**
     * @return Administratie
     */
    public function getAdministratie()
    {
      return $this->administratie;
    }

    /**
     * @param Administratie $administratie
     * @return \RRSVP\Stuf\Systeem
     */
    public function setAdministratie($administratie)
    {
      $this->administratie = $administratie;
      return $this;
    }

    /**
     * @return Gebruiker
     */
    public function getGebruiker()
    {
      return $this->gebruiker;
    }

    /**
     * @param Gebruiker $gebruiker
     * @return \RRSVP\Stuf\Systeem
     */
    public function setGebruiker($gebruiker)
    {
      $this->gebruiker = $gebruiker;
      return $this;
    }

}
