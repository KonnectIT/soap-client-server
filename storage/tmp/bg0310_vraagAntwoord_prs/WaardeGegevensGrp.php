<?php

namespace RRSVP\Stuf;

class WaardeGegevensGrp
{

    /**
     * @var Maateenheid11e $waarde
     */
    protected $waarde = null;

    /**
     * @var Peildatume $waardepeildatum
     */
    protected $waardepeildatum = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Maateenheid11e
     */
    public function getWaarde()
    {
      return $this->waarde;
    }

    /**
     * @param Maateenheid11e $waarde
     * @return \RRSVP\Stuf\WaardeGegevensGrp
     */
    public function setWaarde($waarde)
    {
      $this->waarde = $waarde;
      return $this;
    }

    /**
     * @return Peildatume
     */
    public function getWaardepeildatum()
    {
      return $this->waardepeildatum;
    }

    /**
     * @param Peildatume $waardepeildatum
     * @return \RRSVP\Stuf\WaardeGegevensGrp
     */
    public function setWaardepeildatum($waardepeildatum)
    {
      $this->waardepeildatum = $waardepeildatum;
      return $this;
    }

}
