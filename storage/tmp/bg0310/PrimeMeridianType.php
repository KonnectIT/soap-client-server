<?php

class PrimeMeridianType extends PrimeMeridianBaseType
{

    /**
     * @var IdentifierType $meridianID
     */
    protected $meridianID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var AngleChoiceType $greenwichLongitude
     */
    protected $greenwichLongitude = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $meridianName
     * @param ID $id
     * @param IdentifierType $meridianID
     * @param StringOrRefType $remarks
     * @param AngleChoiceType $greenwichLongitude
     */
    public function __construct($metaDataProperty, $meridianName, $id, $meridianID, $remarks, $greenwichLongitude)
    {
      parent::__construct($metaDataProperty, $meridianName, $id);
      $this->meridianID = $meridianID;
      $this->remarks = $remarks;
      $this->greenwichLongitude = $greenwichLongitude;
    }

    /**
     * @return IdentifierType
     */
    public function getMeridianID()
    {
      return $this->meridianID;
    }

    /**
     * @param IdentifierType $meridianID
     * @return PrimeMeridianType
     */
    public function setMeridianID($meridianID)
    {
      $this->meridianID = $meridianID;
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
     * @return PrimeMeridianType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return AngleChoiceType
     */
    public function getGreenwichLongitude()
    {
      return $this->greenwichLongitude;
    }

    /**
     * @param AngleChoiceType $greenwichLongitude
     * @return PrimeMeridianType
     */
    public function setGreenwichLongitude($greenwichLongitude)
    {
      $this->greenwichLongitude = $greenwichLongitude;
      return $this;
    }

}
