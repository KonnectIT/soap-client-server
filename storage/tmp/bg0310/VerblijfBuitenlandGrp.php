<?php

class VerblijfBuitenlandGrp
{

    /**
     * @var Landcodee $lndlandcode
     */
    protected $lndlandcode = null;

    /**
     * @var Landnaame $lndlandnaam
     */
    protected $lndlandnaam = null;

    /**
     * @var AdresBuitenlande $subadresBuitenland1
     */
    protected $subadresBuitenland1 = null;

    /**
     * @var AdresBuitenlande $subadresBuitenland2
     */
    protected $subadresBuitenland2 = null;

    /**
     * @var AdresBuitenlande $subadresBuitenland3
     */
    protected $subadresBuitenland3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Landcodee
     */
    public function getLndlandcode()
    {
      return $this->lndlandcode;
    }

    /**
     * @param Landcodee $lndlandcode
     * @return VerblijfBuitenlandGrp
     */
    public function setLndlandcode($lndlandcode)
    {
      $this->lndlandcode = $lndlandcode;
      return $this;
    }

    /**
     * @return Landnaame
     */
    public function getLndlandnaam()
    {
      return $this->lndlandnaam;
    }

    /**
     * @param Landnaame $lndlandnaam
     * @return VerblijfBuitenlandGrp
     */
    public function setLndlandnaam($lndlandnaam)
    {
      $this->lndlandnaam = $lndlandnaam;
      return $this;
    }

    /**
     * @return AdresBuitenlande
     */
    public function getSubadresBuitenland1()
    {
      return $this->subadresBuitenland1;
    }

    /**
     * @param AdresBuitenlande $subadresBuitenland1
     * @return VerblijfBuitenlandGrp
     */
    public function setSubadresBuitenland1($subadresBuitenland1)
    {
      $this->subadresBuitenland1 = $subadresBuitenland1;
      return $this;
    }

    /**
     * @return AdresBuitenlande
     */
    public function getSubadresBuitenland2()
    {
      return $this->subadresBuitenland2;
    }

    /**
     * @param AdresBuitenlande $subadresBuitenland2
     * @return VerblijfBuitenlandGrp
     */
    public function setSubadresBuitenland2($subadresBuitenland2)
    {
      $this->subadresBuitenland2 = $subadresBuitenland2;
      return $this;
    }

    /**
     * @return AdresBuitenlande
     */
    public function getSubadresBuitenland3()
    {
      return $this->subadresBuitenland3;
    }

    /**
     * @param AdresBuitenlande $subadresBuitenland3
     * @return VerblijfBuitenlandGrp
     */
    public function setSubadresBuitenland3($subadresBuitenland3)
    {
      $this->subadresBuitenland3 = $subadresBuitenland3;
      return $this;
    }

}
