<?php

namespace RRSVP\Stuf;

abstract class AbstractTimeReferenceSystemType extends DefinitionType
{

    /**
     * @var string $domainOfValidity
     */
    protected $domainOfValidity = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     */
    public function __construct($metaDataProperty, $description, $name, $id)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
    }

    /**
     * @return string
     */
    public function getDomainOfValidity()
    {
      return $this->domainOfValidity;
    }

    /**
     * @param string $domainOfValidity
     * @return \RRSVP\Stuf\AbstractTimeReferenceSystemType
     */
    public function setDomainOfValidity($domainOfValidity)
    {
      $this->domainOfValidity = $domainOfValidity;
      return $this;
    }

}
