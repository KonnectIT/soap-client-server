<?php

class vesLa01prsVestiging
{

    /**
     * @var stuurgegevensLa01prsVestiging $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var parametersLa01prsVestiging $parameters
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
     * @param stuurgegevensLa01prsVestiging $stuurgegevens
     * @param parametersLa01prsVestiging $parameters
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
     * @return stuurgegevensLa01prsVestiging
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevensLa01prsVestiging $stuurgegevens
     * @return vesLa01-prs-Vestiging
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return parametersLa01prsVestiging
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param parametersLa01prsVestiging $parameters
     * @return vesLa01-prs-Vestiging
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
     * @return vesLa01-prs-Vestiging
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
     * @return vesLa01-prs-Vestiging
     */
    public function setAntwoord($antwoord)
    {
      $this->antwoord = $antwoord;
      return $this;
    }

}
