<?php

namespace RRSVP\Stuf;

class BaseStyleDescriptorType extends AbstractGMLType
{

    /**
     * @var ScaleType $spatialResolution
     */
    protected $spatialResolution = null;

    /**
     * @var StyleVariationType[] $styleVariation
     */
    protected $styleVariation = null;

    /**
     * @var animateType $animate
     */
    protected $animate = null;

    /**
     * @var animateMotionType $animateMotion
     */
    protected $animateMotion = null;

    /**
     * @var animateColorType $animateColor
     */
    protected $animateColor = null;

    /**
     * @var setType $set
     */
    protected $set = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param animateType $animate
     * @param animateMotionType $animateMotion
     * @param animateColorType $animateColor
     * @param setType $set
     */
    public function __construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->animate = $animate;
      $this->animateMotion = $animateMotion;
      $this->animateColor = $animateColor;
      $this->set = $set;
    }

    /**
     * @return ScaleType
     */
    public function getSpatialResolution()
    {
      return $this->spatialResolution;
    }

    /**
     * @param ScaleType $spatialResolution
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setSpatialResolution($spatialResolution)
    {
      $this->spatialResolution = $spatialResolution;
      return $this;
    }

    /**
     * @return StyleVariationType[]
     */
    public function getStyleVariation()
    {
      return $this->styleVariation;
    }

    /**
     * @param StyleVariationType[] $styleVariation
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setStyleVariation(array $styleVariation = null)
    {
      $this->styleVariation = $styleVariation;
      return $this;
    }

    /**
     * @return animateType
     */
    public function getAnimate()
    {
      return $this->animate;
    }

    /**
     * @param animateType $animate
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setAnimate($animate)
    {
      $this->animate = $animate;
      return $this;
    }

    /**
     * @return animateMotionType
     */
    public function getAnimateMotion()
    {
      return $this->animateMotion;
    }

    /**
     * @param animateMotionType $animateMotion
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setAnimateMotion($animateMotion)
    {
      $this->animateMotion = $animateMotion;
      return $this;
    }

    /**
     * @return animateColorType
     */
    public function getAnimateColor()
    {
      return $this->animateColor;
    }

    /**
     * @param animateColorType $animateColor
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setAnimateColor($animateColor)
    {
      $this->animateColor = $animateColor;
      return $this;
    }

    /**
     * @return setType
     */
    public function getSet()
    {
      return $this->set;
    }

    /**
     * @param setType $set
     * @return \RRSVP\Stuf\BaseStyleDescriptorType
     */
    public function setSet($set)
    {
      $this->set = $set;
      return $this;
    }

}
