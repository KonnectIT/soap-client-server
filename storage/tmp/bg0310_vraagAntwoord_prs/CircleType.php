<?php

namespace RRSVP\Stuf;

class CircleType extends ArcType
{

    /**
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param PointPropertyType $pointRep
     * @param DirectPositionListType $posList
     * @param CoordinatesType $coordinates
     * @param int $numArc
     */
    public function __construct($pos, $pointProperty, $pointRep, $posList, $coordinates, $numArc)
    {
      parent::__construct($pos, $pointProperty, $pointRep, $posList, $coordinates, $numArc);
    }

}
