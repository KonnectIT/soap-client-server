<?php

class TopoComplexType extends AbstractTopologyType
{

    /**
     * @var TopoComplexMemberType $maximalComplex
     */
    protected $maximalComplex = null;

    /**
     * @var TopoComplexMemberType $superComplex
     */
    protected $superComplex = null;

    /**
     * @var TopoComplexMemberType $subComplex
     */
    protected $subComplex = null;

    /**
     * @var TopoPrimitiveMemberType $topoPrimitiveMember
     */
    protected $topoPrimitiveMember = null;

    /**
     * @var TopoPrimitiveArrayAssociationType $topoPrimitiveMembers
     */
    protected $topoPrimitiveMembers = null;

    /**
     * @var boolean $isMaximal
     */
    protected $isMaximal = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TopoComplexMemberType $maximalComplex
     * @param TopoComplexMemberType $superComplex
     * @param TopoComplexMemberType $subComplex
     * @param TopoPrimitiveMemberType $topoPrimitiveMember
     * @param TopoPrimitiveArrayAssociationType $topoPrimitiveMembers
     * @param boolean $isMaximal
     */
    public function __construct($metaDataProperty, $description, $name, $id, $maximalComplex, $superComplex, $subComplex, $topoPrimitiveMember, $topoPrimitiveMembers, $isMaximal)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->maximalComplex = $maximalComplex;
      $this->superComplex = $superComplex;
      $this->subComplex = $subComplex;
      $this->topoPrimitiveMember = $topoPrimitiveMember;
      $this->topoPrimitiveMembers = $topoPrimitiveMembers;
      $this->isMaximal = $isMaximal;
    }

    /**
     * @return TopoComplexMemberType
     */
    public function getMaximalComplex()
    {
      return $this->maximalComplex;
    }

    /**
     * @param TopoComplexMemberType $maximalComplex
     * @return TopoComplexType
     */
    public function setMaximalComplex($maximalComplex)
    {
      $this->maximalComplex = $maximalComplex;
      return $this;
    }

    /**
     * @return TopoComplexMemberType
     */
    public function getSuperComplex()
    {
      return $this->superComplex;
    }

    /**
     * @param TopoComplexMemberType $superComplex
     * @return TopoComplexType
     */
    public function setSuperComplex($superComplex)
    {
      $this->superComplex = $superComplex;
      return $this;
    }

    /**
     * @return TopoComplexMemberType
     */
    public function getSubComplex()
    {
      return $this->subComplex;
    }

    /**
     * @param TopoComplexMemberType $subComplex
     * @return TopoComplexType
     */
    public function setSubComplex($subComplex)
    {
      $this->subComplex = $subComplex;
      return $this;
    }

    /**
     * @return TopoPrimitiveMemberType
     */
    public function getTopoPrimitiveMember()
    {
      return $this->topoPrimitiveMember;
    }

    /**
     * @param TopoPrimitiveMemberType $topoPrimitiveMember
     * @return TopoComplexType
     */
    public function setTopoPrimitiveMember($topoPrimitiveMember)
    {
      $this->topoPrimitiveMember = $topoPrimitiveMember;
      return $this;
    }

    /**
     * @return TopoPrimitiveArrayAssociationType
     */
    public function getTopoPrimitiveMembers()
    {
      return $this->topoPrimitiveMembers;
    }

    /**
     * @param TopoPrimitiveArrayAssociationType $topoPrimitiveMembers
     * @return TopoComplexType
     */
    public function setTopoPrimitiveMembers($topoPrimitiveMembers)
    {
      $this->topoPrimitiveMembers = $topoPrimitiveMembers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMaximal()
    {
      return $this->isMaximal;
    }

    /**
     * @param boolean $isMaximal
     * @return TopoComplexType
     */
    public function setIsMaximal($isMaximal)
    {
      $this->isMaximal = $isMaximal;
      return $this;
    }

}
