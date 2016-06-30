<?php

namespace RRSVP\Stuf;

class BeschikkingGrpbasis
{

    /**
     * @var StatusWOZBeschikkinge $statusBeschikking
     */
    protected $statusBeschikking = null;

    /**
     * @var Brondocument $brondocument
     */
    protected $brondocument = null;

    /**
     * @var InOnderzoekBeschikkingStatusInWRDbasis $inOnderzoek
     */
    protected $inOnderzoek = null;

    
    public function __construct()
    {
    
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
     * @return \RRSVP\Stuf\BeschikkingGrp-basis
     */
    public function setStatusBeschikking($statusBeschikking)
    {
      $this->statusBeschikking = $statusBeschikking;
      return $this;
    }

    /**
     * @return Brondocument
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param Brondocument $brondocument
     * @return \RRSVP\Stuf\BeschikkingGrp-basis
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return InOnderzoekBeschikkingStatusInWRDbasis
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekBeschikkingStatusInWRDbasis $inOnderzoek
     * @return \RRSVP\Stuf\BeschikkingGrp-basis
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

}
