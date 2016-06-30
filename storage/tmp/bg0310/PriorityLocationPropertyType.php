<?php

class PriorityLocationPropertyType extends LocationPropertyType
{

    /**
     * @var string $priority
     */
    protected $priority = null;

    /**
     * @param AbstractGeometryType $_Geometry
     * @param CodeType $LocationKeyWord
     * @param StringOrRefType $LocationString
     * @param NullType $Null
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     * @param string $priority
     */
    public function __construct($_Geometry, $LocationKeyWord, $LocationString, $Null, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate, $priority)
    {
      parent::__construct($_Geometry, $LocationKeyWord, $LocationString, $Null, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate);
      $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param string $priority
     * @return PriorityLocationPropertyType
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

}
