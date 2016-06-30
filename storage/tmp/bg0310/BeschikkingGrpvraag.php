<?php

class BeschikkingGrpvraag
{

    /**
     * @var StatusWOZBeschikkinge $statusBeschikking
     */
    protected $statusBeschikking = null;

    /**
     * @var BrondocumentWOZvraag $brondocument
     */
    protected $brondocument = null;

    /**
     * @var InOnderzoekBeschikkingStatusInWRDvraag $inOnderzoek
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
     * @return BeschikkingGrp-vraag
     */
    public function setStatusBeschikking($statusBeschikking)
    {
      $this->statusBeschikking = $statusBeschikking;
      return $this;
    }

    /**
     * @return BrondocumentWOZvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentWOZvraag $brondocument
     * @return BeschikkingGrp-vraag
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return InOnderzoekBeschikkingStatusInWRDvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekBeschikkingStatusInWRDvraag $inOnderzoek
     * @return BeschikkingGrp-vraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

}
