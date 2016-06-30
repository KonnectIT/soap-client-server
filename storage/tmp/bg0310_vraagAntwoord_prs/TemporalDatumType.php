<?php

namespace RRSVP\Stuf;

class TemporalDatumType extends TemporalDatumBaseType
{

    /**
     * @var \DateTime $origin
     */
    protected $origin = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param IdentifierType $datumID
     * @param ExtentType $validArea
     * @param string $scope
     * @param ID $id
     * @param \DateTime $origin
     */
    public function __construct($metaDataProperty, $datumName, $datumID, $validArea, $scope, $id, \DateTime $origin)
    {
      parent::__construct($metaDataProperty, $datumName, $datumID, $validArea, $scope, $id);
      $this->origin = $origin->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getOrigin()
    {
      if ($this->origin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->origin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $origin
     * @return \RRSVP\Stuf\TemporalDatumType
     */
    public function setOrigin(\DateTime $origin)
    {
      $this->origin = $origin->format(\DateTime::ATOM);
      return $this;
    }

}
