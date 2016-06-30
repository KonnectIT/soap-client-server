<?php

namespace RRSVP\Stuf;

class BeschikkingGrp
{

    /**
     * @var StatusWOZBeschikkinge $statusBeschikking
     */
    protected $statusBeschikking = null;

    /**
     * @var BrondocumentWOZ $brondocument
     */
    protected $brondocument = null;

    /**
     * @var InOnderzoekBeschikkingStatusInWRD $inOnderzoek
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
     * @return \RRSVP\Stuf\BeschikkingGrp
     */
    public function setStatusBeschikking($statusBeschikking)
    {
      $this->statusBeschikking = $statusBeschikking;
      return $this;
    }

    /**
     * @return BrondocumentWOZ
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentWOZ $brondocument
     * @return \RRSVP\Stuf\BeschikkingGrp
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return InOnderzoekBeschikkingStatusInWRD
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekBeschikkingStatusInWRD $inOnderzoek
     * @return \RRSVP\Stuf\BeschikkingGrp
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

}
