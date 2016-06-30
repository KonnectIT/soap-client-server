<?php

namespace RRSVP\Stuf;

class npsLa01prsNatuurlijkPersoon
{

    /**
     * @var stuurgegevensLa01prsNatuurlijkPersoon $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var parametersLa01prsNatuurlijkPersoon $parameters
     */
    protected $parameters = null;

    /**
     * @var Melding $melding
     */
    protected $melding = null;

    /**
     * @var antwoord $antwoord
     */
    protected $antwoord = null;

    /**
     * @param stuurgegevensLa01prsNatuurlijkPersoon $stuurgegevens
     * @param parametersLa01prsNatuurlijkPersoon $parameters
     * @param Melding $melding
     * @param antwoord $antwoord
     */
    public function __construct($stuurgegevens, $parameters, $melding, $antwoord)
    {
      $this->stuurgegevens = $stuurgegevens;
      $this->parameters = $parameters;
      $this->melding = $melding;
      $this->antwoord = $antwoord;
    }

    /**
     * @return stuurgegevensLa01prsNatuurlijkPersoon
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevensLa01prsNatuurlijkPersoon $stuurgegevens
     * @return \RRSVP\Stuf\npsLa01-prs-NatuurlijkPersoon
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return parametersLa01prsNatuurlijkPersoon
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param parametersLa01prsNatuurlijkPersoon $parameters
     * @return \RRSVP\Stuf\npsLa01-prs-NatuurlijkPersoon
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return Melding
     */
    public function getMelding()
    {
      return $this->melding;
    }

    /**
     * @param Melding $melding
     * @return \RRSVP\Stuf\npsLa01-prs-NatuurlijkPersoon
     */
    public function setMelding($melding)
    {
      $this->melding = $melding;
      return $this;
    }

    /**
     * @return antwoord
     */
    public function getAntwoord()
    {
      return $this->antwoord;
    }

    /**
     * @param antwoord $antwoord
     * @return \RRSVP\Stuf\npsLa01-prs-NatuurlijkPersoon
     */
    public function setAntwoord($antwoord)
    {
      $this->antwoord = $antwoord;
      return $this;
    }

}
