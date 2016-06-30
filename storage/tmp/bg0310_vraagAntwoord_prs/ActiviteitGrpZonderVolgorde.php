<?php

namespace RRSVP\Stuf;

class ActiviteitGrpZonderVolgorde
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
     * @return \RRSVP\Stuf\ActiviteitGrpZonderVolgorde
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
     * @return \RRSVP\Stuf\ActiviteitGrpZonderVolgorde
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
     * @return \RRSVP\Stuf\ActiviteitGrpZonderVolgorde
     */
    public function setIndicatieHoofdactiviteit($indicatieHoofdactiviteit)
    {
      $this->indicatieHoofdactiviteit = $indicatieHoofdactiviteit;
      return $this;
    }

}
