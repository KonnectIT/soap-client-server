<?php

namespace RRSVP\Stuf;

abstract class AbstractTimeGeometricPrimitiveType extends AbstractTimePrimitiveType
{

    /**
     * @var anyURI $frame
     */
    protected $frame = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param anyURI $frame
     */
    public function __construct($metaDataProperty, $description, $name, $id, $frame)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->frame = $frame;
    }

    /**
     * @return anyURI
     */
    public function getFrame()
    {
      return $this->frame;
    }

    /**
     * @param anyURI $frame
     * @return \RRSVP\Stuf\AbstractTimeGeometricPrimitiveType
     */
    public function setFrame($frame)
    {
      $this->frame = $frame;
      return $this;
    }

}
