<?php

namespace RRSVP\Stuf;

class arcType
{

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var arcroleType $arcrole
     */
    protected $arcrole = null;

    /**
     * @var showType $show
     */
    protected $show = null;

    /**
     * @var actuateType $actuate
     */
    protected $actuate = null;

    /**
     * @var fromType $from
     */
    protected $from = null;

    /**
     * @var toType $to
     */
    protected $to = null;

    /**
     * @param titleAttrType $title
     * @param typeType $type
     * @param arcroleType $arcrole
     * @param showType $show
     * @param actuateType $actuate
     * @param fromType $from
     * @param toType $to
     */
    public function __construct($title, $type, $arcrole, $show, $actuate, $from, $to)
    {
      $this->title = $title;
      $this->type = $type;
      $this->arcrole = $arcrole;
      $this->show = $show;
      $this->actuate = $actuate;
      $this->from = $from;
      $this->to = $to;
    }

    /**
     * @return titleAttrType
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param titleAttrType $title
     * @return \RRSVP\Stuf\arcType
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return typeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param typeType $type
     * @return \RRSVP\Stuf\arcType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return arcroleType
     */
    public function getArcrole()
    {
      return $this->arcrole;
    }

    /**
     * @param arcroleType $arcrole
     * @return \RRSVP\Stuf\arcType
     */
    public function setArcrole($arcrole)
    {
      $this->arcrole = $arcrole;
      return $this;
    }

    /**
     * @return showType
     */
    public function getShow()
    {
      return $this->show;
    }

    /**
     * @param showType $show
     * @return \RRSVP\Stuf\arcType
     */
    public function setShow($show)
    {
      $this->show = $show;
      return $this;
    }

    /**
     * @return actuateType
     */
    public function getActuate()
    {
      return $this->actuate;
    }

    /**
     * @param actuateType $actuate
     * @return \RRSVP\Stuf\arcType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

    /**
     * @return fromType
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param fromType $from
     * @return \RRSVP\Stuf\arcType
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return toType
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param toType $to
     * @return \RRSVP\Stuf\arcType
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
