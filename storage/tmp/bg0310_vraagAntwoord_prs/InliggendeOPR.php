<?php

namespace RRSVP\Stuf;

class InliggendeOPR
{

    /**
     * @var ObjectNummeringe $opridentificatie
     */
    protected $opridentificatie = null;

    /**
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    /**
     * @var NaamgevingObjecte $wplwoonplaatsNaam
     */
    protected $wplwoonplaatsNaam = null;

    /**
     * @var Huisnummerrangee $oprhuisnummerrangeOneven
     */
    protected $oprhuisnummerrangeOneven = null;

    /**
     * @var Huisnummerrangee $oprhuisnummerrangeEven
     */
    protected $oprhuisnummerrangeEven = null;

    /**
     * @var Huisnummerrangee $oprhuisnummerrangeEvenOneven
     */
    protected $oprhuisnummerrangeEvenOneven = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ObjectNummeringe
     */
    public function getOpridentificatie()
    {
      return $this->opridentificatie;
    }

    /**
     * @param ObjectNummeringe $opridentificatie
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setOpridentificatie($opridentificatie)
    {
      $this->opridentificatie = $opridentificatie;
      return $this;
    }

    /**
     * @return WoonplaatsCoderinge
     */
    public function getWplidentificatie()
    {
      return $this->wplidentificatie;
    }

    /**
     * @param WoonplaatsCoderinge $wplidentificatie
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
      return $this;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function getWplwoonplaatsNaam()
    {
      return $this->wplwoonplaatsNaam;
    }

    /**
     * @param NaamgevingObjecte $wplwoonplaatsNaam
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setWplwoonplaatsNaam($wplwoonplaatsNaam)
    {
      $this->wplwoonplaatsNaam = $wplwoonplaatsNaam;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getOprhuisnummerrangeOneven()
    {
      return $this->oprhuisnummerrangeOneven;
    }

    /**
     * @param Huisnummerrangee $oprhuisnummerrangeOneven
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setOprhuisnummerrangeOneven($oprhuisnummerrangeOneven)
    {
      $this->oprhuisnummerrangeOneven = $oprhuisnummerrangeOneven;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getOprhuisnummerrangeEven()
    {
      return $this->oprhuisnummerrangeEven;
    }

    /**
     * @param Huisnummerrangee $oprhuisnummerrangeEven
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setOprhuisnummerrangeEven($oprhuisnummerrangeEven)
    {
      $this->oprhuisnummerrangeEven = $oprhuisnummerrangeEven;
      return $this;
    }

    /**
     * @return Huisnummerrangee
     */
    public function getOprhuisnummerrangeEvenOneven()
    {
      return $this->oprhuisnummerrangeEvenOneven;
    }

    /**
     * @param Huisnummerrangee $oprhuisnummerrangeEvenOneven
     * @return \RRSVP\Stuf\InliggendeOPR
     */
    public function setOprhuisnummerrangeEvenOneven($oprhuisnummerrangeEvenOneven)
    {
      $this->oprhuisnummerrangeEvenOneven = $oprhuisnummerrangeEvenOneven;
      return $this;
    }

}
