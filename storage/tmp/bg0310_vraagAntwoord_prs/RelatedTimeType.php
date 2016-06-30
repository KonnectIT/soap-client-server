<?php

namespace RRSVP\Stuf;

class RelatedTimeType extends TimePrimitivePropertyType
{

    /**
     * @var anonymous1339 $relativePosition
     */
    protected $relativePosition = null;

    /**
     * @param AbstractTimePrimitiveType $_TimePrimitive
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     * @param anonymous1339 $relativePosition
     */
    public function __construct($_TimePrimitive, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate, $relativePosition)
    {
      parent::__construct($_TimePrimitive, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate);
      $this->relativePosition = $relativePosition;
    }

    /**
     * @return anonymous1339
     */
    public function getRelativePosition()
    {
      return $this->relativePosition;
    }

    /**
     * @param anonymous1339 $relativePosition
     * @return \RRSVP\Stuf\RelatedTimeType
     */
    public function setRelativePosition($relativePosition)
    {
      $this->relativePosition = $relativePosition;
      return $this;
    }

}
