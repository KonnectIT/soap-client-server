<?php

namespace RRSVP\Stuf;

class BagType extends AbstractGMLType
{

    /**
     * @var AssociationType $member
     */
    protected $member = null;

    /**
     * @var ArrayAssociationType $members
     */
    protected $members = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param AssociationType $member
     * @param ArrayAssociationType $members
     */
    public function __construct($metaDataProperty, $description, $name, $id, $member, $members)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->member = $member;
      $this->members = $members;
    }

    /**
     * @return AssociationType
     */
    public function getMember()
    {
      return $this->member;
    }

    /**
     * @param AssociationType $member
     * @return \RRSVP\Stuf\BagType
     */
    public function setMember($member)
    {
      $this->member = $member;
      return $this;
    }

    /**
     * @return ArrayAssociationType
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param ArrayAssociationType $members
     * @return \RRSVP\Stuf\BagType
     */
    public function setMembers($members)
    {
      $this->members = $members;
      return $this;
    }

}
