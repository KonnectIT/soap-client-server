<?php

class SequenceRuleType
{

    /**
     * @var SequenceRuleNames $_
     */
    protected $_ = null;

    /**
     * @var IncrementOrder $order
     */
    protected $order = null;

    /**
     * @param SequenceRuleNames $_
     * @param IncrementOrder $order
     */
    public function __construct($_, $order)
    {
      $this->_ = $_;
      $this->order = $order;
    }

    /**
     * @return SequenceRuleNames
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param SequenceRuleNames $_
     * @return SequenceRuleType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return IncrementOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param IncrementOrder $order
     * @return SequenceRuleType
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}
