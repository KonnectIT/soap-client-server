<?php

namespace RRSVP\Stuf;

class Foutbericht
{

    /**
     * @var Foutcode $code
     */
    protected $code = null;

    /**
     * @var Foutplek $plek
     */
    protected $plek = null;

    /**
     * @var Foutomschrijving $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var Foutdetails $details
     */
    protected $details = null;

    /**
     * @var FoutdetailsXML $detailsXML
     */
    protected $detailsXML = null;

    /**
     * @param Foutcode $code
     * @param Foutplek $plek
     * @param Foutomschrijving $omschrijving
     */
    public function __construct($code, $plek, $omschrijving)
    {
      $this->code = $code;
      $this->plek = $plek;
      $this->omschrijving = $omschrijving;
    }

    /**
     * @return Foutcode
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param Foutcode $code
     * @return \RRSVP\Stuf\Foutbericht
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Foutplek
     */
    public function getPlek()
    {
      return $this->plek;
    }

    /**
     * @param Foutplek $plek
     * @return \RRSVP\Stuf\Foutbericht
     */
    public function setPlek($plek)
    {
      $this->plek = $plek;
      return $this;
    }

    /**
     * @return Foutomschrijving
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param Foutomschrijving $omschrijving
     * @return \RRSVP\Stuf\Foutbericht
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return Foutdetails
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param Foutdetails $details
     * @return \RRSVP\Stuf\Foutbericht
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

    /**
     * @return FoutdetailsXML
     */
    public function getDetailsXML()
    {
      return $this->detailsXML;
    }

    /**
     * @param FoutdetailsXML $detailsXML
     * @return \RRSVP\Stuf\Foutbericht
     */
    public function setDetailsXML($detailsXML)
    {
      $this->detailsXML = $detailsXML;
      return $this;
    }

}
