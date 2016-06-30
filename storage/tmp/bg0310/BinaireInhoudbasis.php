<?php

class BinaireInhoudbasis extends base64Binary
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var Bestandsnaam $bestandsnaam
     */
    protected $bestandsnaam = null;

    /**
     * @param base64Binary $_
     * @param anonymous204 $contentType
     * @param base64Binary $_
     * @param Bestandsnaam $bestandsnaam
     */
    public function __construct($_, $contentType, $bestandsnaam)
    {
      parent::__construct($_, $contentType);
      $this->_ = $_;
      $this->bestandsnaam = $bestandsnaam;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return BinaireInhoud-basis
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
     * @return BinaireInhoud-basis
     */
    public function setBestandsnaam($bestandsnaam)
    {
      $this->bestandsnaam = $bestandsnaam;
      return $this;
    }

}
