<?php

namespace RRSVP\Stuf;

class ActiviteitGrp
{

    /**
     * @var ActiviteitCodee $code
     */
    protected $code = null;

    /**
     * @var OmschrijvingActiviteite $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var Indicatiee $indicatieHoofdactiviteit
     */
    protected $indicatieHoofdactiviteit = null;

    /**
     * @var Maateenheid6e $volgorde
     */
    protected $volgorde = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActiviteitCodee
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param ActiviteitCodee $code
     * @return \RRSVP\Stuf\ActiviteitGrp
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return OmschrijvingActiviteite
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param OmschrijvingActiviteite $omschrijving
     * @return \RRSVP\Stuf\ActiviteitGrp
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return Indicatiee
     */
    public function getIndicatieHoofdactiviteit()
    {
      return $this->indicatieHoofdactiviteit;
    }

    /**
     * @param Indicatiee $indicatieHoofdactiviteit
     * @return \RRSVP\Stuf\ActiviteitGrp
     */
    public function setIndicatieHoofdactiviteit($indicatieHoofdactiviteit)
    {
      $this->indicatieHoofdactiviteit = $indicatieHoofdactiviteit;
      return $this;
    }

    /**
     * @return Maateenheid6e
     */
    public function getVolgorde()
    {
      return $this->volgorde;
    }

    /**
     * @param Maateenheid6e $volgorde
     * @return \RRSVP\Stuf\ActiviteitGrp
     */
    public function setVolgorde($volgorde)
    {
      $this->volgorde = $volgorde;
      return $this;
    }

}
