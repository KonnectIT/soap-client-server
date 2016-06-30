<?php

namespace RRSVP\Stuf;

class LabelStyleType extends BaseStyleDescriptorType
{

    /**
     * @var string $style
     */
    protected $style = null;

    /**
     * @var LabelType $label
     */
    protected $label = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param animateType $animate
     * @param animateMotionType $animateMotion
     * @param animateColorType $animateColor
     * @param setType $set
     * @param string $style
     * @param LabelType $label
     */
    public function __construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set, $style, $label)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set);
      $this->style = $style;
      $this->label = $label;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
      return $this->style;
    }

    /**
     * @param string $style
     * @return \RRSVP\Stuf\LabelStyleType
     */
    public function setStyle($style)
    {
      $this->style = $style;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param LabelType $label
     * @return \RRSVP\Stuf\LabelStyleType
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
