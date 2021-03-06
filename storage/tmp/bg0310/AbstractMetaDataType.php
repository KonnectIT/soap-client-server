<?php

abstract class AbstractMetaDataType
{

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param ID $id
     */
    public function __construct($id)
    {
      $this->id = $id;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return AbstractMetaDataType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
