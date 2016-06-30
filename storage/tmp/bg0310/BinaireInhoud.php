<?php

class BinaireInhoud
{

    /**
     * @var BinaireInhoudbasis $_
     */
    protected $_ = null;

    /**
     * @var Bestandsnaam $bestandsnaam
     */
    protected $bestandsnaam = null;

    /**
     * @param BinaireInhoudbasis $_
     * @param Bestandsnaam $bestandsnaam
     */
    public function __construct($_, $bestandsnaam)
    {
      $this->_ = $_;
      $this->bestandsnaam = $bestandsnaam;
    }

    /**
     * @return BinaireInhoudbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param BinaireInhoudbasis $_
     * @return BinaireInhoud
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return Bestandsnaam
     */
    public function getBestandsnaam()
    {
      return $this->bestandsnaam;
    }

    /**
     * @param Bestandsnaam $bestandsnaam
     * @return BinaireInhoud
     */
    public function setBestandsnaam($bestandsnaam)
    {
      $this->bestandsnaam = $bestandsnaam;
      return $this;
    }

}
