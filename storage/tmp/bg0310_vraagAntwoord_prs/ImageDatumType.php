<?php

namespace RRSVP\Stuf;

class ImageDatumType extends AbstractDatumType
{

    /**
     * @var PixelInCellType $pixelInCell
     */
    protected $pixelInCell = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param ID $id
     * @param IdentifierType $datumID
     * @param StringOrRefType $remarks
     * @param CodeType $anchorPoint
     * @param date $realizationEpoch
     * @param ExtentType $validArea
     * @param string $scope
     * @param PixelInCellType $pixelInCell
     */
    public function __construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope, $pixelInCell)
    {
      parent::__construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope);
      $this->pixelInCell = $pixelInCell;
    }

    /**
     * @return PixelInCellType
     */
    public function getPixelInCell()
    {
      return $this->pixelInCell;
    }

    /**
     * @param PixelInCellType $pixelInCell
     * @return \RRSVP\Stuf\ImageDatumType
     */
    public function setPixelInCell($pixelInCell)
    {
      $this->pixelInCell = $pixelInCell;
      return $this;
    }

}
