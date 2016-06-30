<?php

namespace RRSVP\Stuf;

class LandinrichtingsrenteGrp
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
     * @var AardLIProjecte $aardLIProject
     */
    protected $aardLIProject = null;

    /**
     * @var Jaare $eindjaar
     */
    protected $eindjaar = null;

    
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
     * @return \RRSVP\Stuf\LandinrichtingsrenteGrp
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
     * @return \RRSVP\Stuf\LandinrichtingsrenteGrp
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
     * @return \RRSVP\Stuf\LandinrichtingsrenteGrp
     */
    public function setAardBedrag($aardBedrag)
    {
      $this->aardBedrag = $aardBedrag;
      return $this;
    }

    /**
     * @return AardLIProjecte
     */
    public function getAardLIProject()
    {
      return $this->aardLIProject;
    }

    /**
     * @param AardLIProjecte $aardLIProject
     * @return \RRSVP\Stuf\LandinrichtingsrenteGrp
     */
    public function setAardLIProject($aardLIProject)
    {
      $this->aardLIProject = $aardLIProject;
      return $this;
    }

    /**
     * @return Jaare
     */
    public function getEindjaar()
    {
      return $this->eindjaar;
    }

    /**
     * @param Jaare $eindjaar
     * @return \RRSVP\Stuf\LandinrichtingsrenteGrp
     */
    public function setEindjaar($eindjaar)
    {
      $this->eindjaar = $eindjaar;
      return $this;
    }

}
