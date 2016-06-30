<?php

class beschikking
{

    /**
     * @var StatusWOZBeschikkinge $statusBeschikking
     */
    protected $statusBeschikking = null;

    /**
     * @param StatusWOZBeschikkinge $statusBeschikking
     */
    public function __construct($statusBeschikking)
    {
      $this->statusBeschikking = $statusBeschikking;
    }

    /**
     * @return StatusWOZBeschikkinge
     */
    public function getStatusBeschikking()
    {
      return $this->statusBeschikking;
    }

    /**
     * @param StatusWOZBeschikkinge $statusBeschikking
     * @return beschikking
     */
    public function setStatusBeschikking($statusBeschikking)
    {
      $this->statusBeschikking = $statusBeschikking;
      return $this;
    }

}
