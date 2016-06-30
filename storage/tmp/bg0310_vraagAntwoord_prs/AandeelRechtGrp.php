<?php

namespace RRSVP\Stuf;

class AandeelRechtGrp
{

    /**
     * @var Maateenheid8e $teller
     */
    protected $teller = null;

    /**
     * @var Maateenheid8e $noemer
     */
    protected $noemer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Maateenheid8e
     */
    public function getTeller()
    {
      return $this->teller;
    }

    /**
     * @param Maateenheid8e $teller
     * @return \RRSVP\Stuf\AandeelRechtGrp
     */
    public function setTeller($teller)
    {
      $this->teller = $teller;
      return $this;
    }

    /**
     * @return Maateenheid8e
     */
    public function getNoemer()
    {
      return $this->noemer;
    }

    /**
     * @param Maateenheid8e $noemer
     * @return \RRSVP\Stuf\AandeelRechtGrp
     */
    public function setNoemer($noemer)
    {
      $this->noemer = $noemer;
      return $this;
    }

}
