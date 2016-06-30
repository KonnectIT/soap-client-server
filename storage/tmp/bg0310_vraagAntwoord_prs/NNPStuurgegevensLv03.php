<?php

namespace RRSVP\Stuf;

class NNPStuurgegevensLv03
{

    /**
     * @var BerichtcodeLv03 $berichtcode
     */
    protected $berichtcode = null;

    /**
     * @var Systeem $zender
     */
    protected $zender = null;

    /**
     * @var Systeem $ontvanger
     */
    protected $ontvanger = null;

    /**
     * @var Refnummer $referentienummer
     */
    protected $referentienummer = null;

    /**
     * @var Tijdstip $tijdstipBericht
     */
    protected $tijdstipBericht = null;

    /**
     * @var EntiteittypeNNP $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLv03 $berichtcode
     * @param EntiteittypeNNP $entiteittype
     */
    public function __construct($berichtcode, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLv03
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLv03 $berichtcode
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setBerichtcode($berichtcode)
    {
      $this->berichtcode = $berichtcode;
      return $this;
    }

    /**
     * @return Systeem
     */
    public function getZender()
    {
      return $this->zender;
    }

    /**
     * @param Systeem $zender
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setZender($zender)
    {
      $this->zender = $zender;
      return $this;
    }

    /**
     * @return Systeem
     */
    public function getOntvanger()
    {
      return $this->ontvanger;
    }

    /**
     * @param Systeem $ontvanger
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setOntvanger($ontvanger)
    {
      $this->ontvanger = $ontvanger;
      return $this;
    }

    /**
     * @return Refnummer
     */
    public function getReferentienummer()
    {
      return $this->referentienummer;
    }

    /**
     * @param Refnummer $referentienummer
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setReferentienummer($referentienummer)
    {
      $this->referentienummer = $referentienummer;
      return $this;
    }

    /**
     * @return Tijdstip
     */
    public function getTijdstipBericht()
    {
      return $this->tijdstipBericht;
    }

    /**
     * @param Tijdstip $tijdstipBericht
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return EntiteittypeNNP
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeNNP $entiteittype
     * @return \RRSVP\Stuf\NNP-StuurgegevensLv03
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
