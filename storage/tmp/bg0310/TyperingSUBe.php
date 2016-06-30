<?php

class TyperingSUBe
{

    /**
     * @var TyperingSUB $_
     */
    protected $_ = null;

    /**
     * @param TyperingSUB $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return TyperingSUB
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param TyperingSUB $_
     * @return TyperingSUB-e
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
