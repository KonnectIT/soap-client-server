<?php

namespace RRSVP\Stuf;

class IndirectEntryType
{

    /**
     * @var DefinitionProxyType $DefinitionProxy
     */
    protected $DefinitionProxy = null;

    /**
     * @param DefinitionProxyType $DefinitionProxy
     */
    public function __construct($DefinitionProxy)
    {
      $this->DefinitionProxy = $DefinitionProxy;
    }

    /**
     * @return DefinitionProxyType
     */
    public function getDefinitionProxy()
    {
      return $this->DefinitionProxy;
    }

    /**
     * @param DefinitionProxyType $DefinitionProxy
     * @return \RRSVP\Stuf\IndirectEntryType
     */
    public function setDefinitionProxy($DefinitionProxy)
    {
      $this->DefinitionProxy = $DefinitionProxy;
      return $this;
    }

}
