<?php

namespace RRSVP\Stuf;

class GeodesicType extends GeodesicStringType
{

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param DirectPositionListType $posList
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param CurveInterpolationType $interpolation
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $posList, $pos, $pointProperty, $interpolation)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $posList, $pos, $pointProperty, $interpolation);
    }

}
