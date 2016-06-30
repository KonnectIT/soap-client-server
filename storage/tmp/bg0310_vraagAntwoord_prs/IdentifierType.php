<?php

namespace RRSVP\Stuf;

class IdentifierType
{

    /**
     * @var CodeType $name
     */
    protected $name = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @param CodeType $name
     * @param string $version
     * @param StringOrRefType $remarks
     */
    public function __construct($name, $version, $remarks)
    {
      $this->name = $name;
      $this->version = $version;
      $this->remarks = $remarks;
    }

    /**
     * @return CodeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param CodeType $name
     * @return \RRSVP\Stuf\IdentifierType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \RRSVP\Stuf\IdentifierType
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param StringOrRefType $remarks
     * @return \RRSVP\Stuf\IdentifierType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

}
