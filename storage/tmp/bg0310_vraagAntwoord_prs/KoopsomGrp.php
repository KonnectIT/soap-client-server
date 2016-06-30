<?php

namespace RRSVP\Stuf;

class KoopsomGrp
{

    /**
     * @var Maateenheid182nege $bedrag
     */
    protected $bedrag = null;

    /**
     * @var Valutasoorte $valutasoort
     */
    protected $valutasoort = null;

    /**
     * @var AardBedrage $aardBedrag
     */
    protected $aardBedrag = null;

    /**
     * @var Jaare $koopjaar
     */
    protected $koopjaar = null;

    /**
     * @var Tijdstipe $transactiedatum
     */
    protected $transactiedatum = null;

    /**
     * @var Booleane $meerOnroerendGoed
     */
    protected $meerOnroerendGoed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Maateenheid182nege
     */
    public function getBedrag()
    {
      return $this->bedrag;
    }

    /**
     * @param Maateenheid182nege $bedrag
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setBedrag($bedrag)
    {
      $this->bedrag = $bedrag;
      return $this;
    }

    /**
     * @return Valutasoorte
     */
    public function getValutasoort()
    {
      return $this->valutasoort;
    }

    /**
     * @param Valutasoorte $valutasoort
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setValutasoort($valutasoort)
    {
      $this->valutasoort = $valutasoort;
      return $this;
    }

    /**
     * @return AardBedrage
     */
    public function getAardBedrag()
    {
      return $this->aardBedrag;
    }

    /**
     * @param AardBedrage $aardBedrag
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setAardBedrag($aardBedrag)
    {
      $this->aardBedrag = $aardBedrag;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getKoopjaar()
    {
      return $this->koopjaar;
    }

    /**
     * @param Jaare $koopjaar
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setKoopjaar($koopjaar)
    {
      $this->koopjaar = $koopjaar;
      return $this;
    }

    /**
     * @return Tijdstipe
     */
    public function getTransactiedatum()
    {
      return $this->transactiedatum;
    }

    /**
     * @param Tijdstipe $transactiedatum
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setTransactiedatum($transactiedatum)
    {
      $this->transactiedatum = $transactiedatum;
      return $this;
    }

    /**
     * @return Booleane
     */
    public function getMeerOnroerendGoed()
    {
      return $this->meerOnroerendGoed;
    }

    /**
     * @param Booleane $meerOnroerendGoed
     * @return \RRSVP\Stuf\KoopsomGrp
     */
    public function setMeerOnroerendGoed($meerOnroerendGoed)
    {
      $this->meerOnroerendGoed = $meerOnroerendGoed;
      return $this;
    }

}
