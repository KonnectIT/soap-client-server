<?php

namespace RRSVP\Stuf;

class BinaireInhoudvraag
{

    /**
     * @var BinaireInhoudbasis $_
     */
    protected $_ = null;

    /**
     * @var anonymous204 $contentType
     */
    protected $contentType = null;

    /**
     * @var Bestandsnaam $bestandsnaam
     */
    protected $bestandsnaam = null;

    /**
     * @param BinaireInhoudbasis $_
     * @param anonymous204 $contentType
     * @param Bestandsnaam $bestandsnaam
     */
    public function __construct($_, $contentType, $bestandsnaam)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
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
     * @return \RRSVP\Stuf\BinaireInhoud-vraag
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous204
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous204 $contentType
     * @return \RRSVP\Stuf\BinaireInhoud-vraag
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
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
     * @return \RRSVP\Stuf\BinaireInhoud-vraag
     */
    public function setBestandsnaam($bestandsnaam)
    {
      $this->bestandsnaam = $bestandsnaam;
      return $this;
    }

}
