<?php

abstract class AbstractTopoPrimitiveType extends AbstractTopologyType
{

    /**
     * @var IsolatedPropertyType $isolated
     */
    protected $isolated = null;

    /**
     * @var ContainerPropertyType $container
     */
    protected $container = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param IsolatedPropertyType $isolated
     * @param ContainerPropertyType $container
     */
    public function __construct($metaDataProperty, $description, $name, $id, $isolated, $container)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->isolated = $isolated;
      $this->container = $container;
    }

    /**
     * @return IsolatedPropertyType
     */
    public function getIsolated()
    {
      return $this->isolated;
    }

    /**
     * @param IsolatedPropertyType $isolated
     * @return AbstractTopoPrimitiveType
     */
    public function setIsolated($isolated)
    {
      $this->isolated = $isolated;
      return $this;
    }

    /**
     * @return ContainerPropertyType
     */
    public function getContainer()
    {
      return $this->container;
    }

    /**
     * @param ContainerPropertyType $container
     * @return AbstractTopoPrimitiveType
     */
    public function setContainer($container)
    {
      $this->container = $container;
      return $this;
    }

}
