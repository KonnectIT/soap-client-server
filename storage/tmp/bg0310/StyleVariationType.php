<?php

class StyleVariationType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $styleProperty
     */
    protected $styleProperty = null;

    /**
     * @var string $featurePropertyRange
     */
    protected $featurePropertyRange = null;

    /**
     * @param string $_
     * @param string $styleProperty
     * @param string $featurePropertyRange
     */
    public function __construct($_, $styleProperty, $featurePropertyRange)
    {
      $this->_ = $_;
      $this->styleProperty = $styleProperty;
      $this->featurePropertyRange = $featurePropertyRange;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return StyleVariationType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getStyleProperty()
    {
      return $this->styleProperty;
    }

    /**
     * @param string $styleProperty
     * @return StyleVariationType
     */
    public function setStyleProperty($styleProperty)
    {
      $this->styleProperty = $styleProperty;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeaturePropertyRange()
    {
      return $this->featurePropertyRange;
    }

    /**
     * @param string $featurePropertyRange
     * @return StyleVariationType
     */
    public function setFeaturePropertyRange($featurePropertyRange)
    {
      $this->featurePropertyRange = $featurePropertyRange;
      return $this;
    }

}
