<?php

class ImageCRSType extends AbstractReferenceSystemType
{

    /**
     * @var CartesianCSRefType $usesCartesianCS
     */
    protected $usesCartesianCS = null;

    /**
     * @var ObliqueCartesianCSRefType $usesObliqueCartesianCS
     */
    protected $usesObliqueCartesianCS = null;

    /**
     * @var ImageDatumRefType $usesImageDatum
     */
    protected $usesImageDatum = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param CartesianCSRefType $usesCartesianCS
     * @param ObliqueCartesianCSRefType $usesObliqueCartesianCS
     * @param ImageDatumRefType $usesImageDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesCartesianCS, $usesObliqueCartesianCS, $usesImageDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesCartesianCS = $usesCartesianCS;
      $this->usesObliqueCartesianCS = $usesObliqueCartesianCS;
      $this->usesImageDatum = $usesImageDatum;
    }

    /**
     * @return CartesianCSRefType
     */
    public function getUsesCartesianCS()
    {
      return $this->usesCartesianCS;
    }

    /**
     * @param CartesianCSRefType $usesCartesianCS
     * @return ImageCRSType
     */
    public function setUsesCartesianCS($usesCartesianCS)
    {
      $this->usesCartesianCS = $usesCartesianCS;
      return $this;
    }

    /**
     * @return ObliqueCartesianCSRefType
     */
    public function getUsesObliqueCartesianCS()
    {
      return $this->usesObliqueCartesianCS;
    }

    /**
     * @param ObliqueCartesianCSRefType $usesObliqueCartesianCS
     * @return ImageCRSType
     */
    public function setUsesObliqueCartesianCS($usesObliqueCartesianCS)
    {
      $this->usesObliqueCartesianCS = $usesObliqueCartesianCS;
      return $this;
    }

    /**
     * @return ImageDatumRefType
     */
    public function getUsesImageDatum()
    {
      return $this->usesImageDatum;
    }

    /**
     * @param ImageDatumRefType $usesImageDatum
     * @return ImageCRSType
     */
    public function setUsesImageDatum($usesImageDatum)
    {
      $this->usesImageDatum = $usesImageDatum;
      return $this;
    }

}
