<?php

class setType extends setPrototype
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var string $class
     */
    protected $class = null;

    /**
     * @var anonymous1248 $lang
     */
    protected $lang = null;

    /**
     * @var string $alt
     */
    protected $alt = null;

    /**
     * @var anyURI $longdesc
     */
    protected $longdesc = null;

    /**
     * @var string $begin
     */
    protected $begin = null;

    /**
     * @var string $end
     */
    protected $end = null;

    /**
     * @var string $dur
     */
    protected $dur = null;

    /**
     * @var string $repeatDur
     */
    protected $repeatDur = null;

    /**
     * @var nonNegativeDecimalType $repeatCount
     */
    protected $repeatCount = null;

    /**
     * @var int $repeat
     */
    protected $repeat = null;

    /**
     * @var string $min
     */
    protected $min = null;

    /**
     * @var string $max
     */
    protected $max = null;

    /**
     * @var syncBehaviorType $syncBehavior
     */
    protected $syncBehavior = null;

    /**
     * @var string $syncTolerance
     */
    protected $syncTolerance = null;

    /**
     * @var syncBehaviorDefaultType $syncBehaviorDefault
     */
    protected $syncBehaviorDefault = null;

    /**
     * @var string $syncToleranceDefault
     */
    protected $syncToleranceDefault = null;

    /**
     * @var restartTimingType $restart
     */
    protected $restart = null;

    /**
     * @var restartDefaultType $restartDefault
     */
    protected $restartDefault = null;

    /**
     * @var fillTimingAttrsType $fill
     */
    protected $fill = null;

    /**
     * @var fillDefaultType $fillDefault
     */
    protected $fillDefault = null;

    /**
     * @var IDREF $targetElement
     */
    protected $targetElement = null;

    /**
     * @var boolean $skipcontent
     */
    protected $skipcontent = null;

    /**
     * @param string $attributeName
     * @param anonymous1639 $attributeType
     * @param string $to
     * @param string $any
     * @param ID $id
     * @param string $class
     * @param anonymous1248 $lang
     * @param string $alt
     * @param anyURI $longdesc
     * @param string $begin
     * @param string $end
     * @param string $dur
     * @param string $repeatDur
     * @param nonNegativeDecimalType $repeatCount
     * @param int $repeat
     * @param string $min
     * @param string $max
     * @param syncBehaviorType $syncBehavior
     * @param string $syncTolerance
     * @param syncBehaviorDefaultType $syncBehaviorDefault
     * @param string $syncToleranceDefault
     * @param restartTimingType $restart
     * @param restartDefaultType $restartDefault
     * @param fillTimingAttrsType $fill
     * @param fillDefaultType $fillDefault
     * @param IDREF $targetElement
     * @param boolean $skipcontent
     */
    public function __construct($attributeName, $attributeType, $to, $any, $id, $class, $lang, $alt, $longdesc, $begin, $end, $dur, $repeatDur, $repeatCount, $repeat, $min, $max, $syncBehavior, $syncTolerance, $syncBehaviorDefault, $syncToleranceDefault, $restart, $restartDefault, $fill, $fillDefault, $targetElement, $skipcontent)
    {
      parent::__construct($attributeName, $attributeType, $to);
      $this->any = $any;
      $this->id = $id;
      $this->class = $class;
      $this->lang = $lang;
      $this->alt = $alt;
      $this->longdesc = $longdesc;
      $this->begin = $begin;
      $this->end = $end;
      $this->dur = $dur;
      $this->repeatDur = $repeatDur;
      $this->repeatCount = $repeatCount;
      $this->repeat = $repeat;
      $this->min = $min;
      $this->max = $max;
      $this->syncBehavior = $syncBehavior;
      $this->syncTolerance = $syncTolerance;
      $this->syncBehaviorDefault = $syncBehaviorDefault;
      $this->syncToleranceDefault = $syncToleranceDefault;
      $this->restart = $restart;
      $this->restartDefault = $restartDefault;
      $this->fill = $fill;
      $this->fillDefault = $fillDefault;
      $this->targetElement = $targetElement;
      $this->skipcontent = $skipcontent;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return setType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
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
     * @return setType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param string $class
     * @return setType
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return anonymous1248
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param anonymous1248 $lang
     * @return setType
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlt()
    {
      return $this->alt;
    }

    /**
     * @param string $alt
     * @return setType
     */
    public function setAlt($alt)
    {
      $this->alt = $alt;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getLongdesc()
    {
      return $this->longdesc;
    }

    /**
     * @param anyURI $longdesc
     * @return setType
     */
    public function setLongdesc($longdesc)
    {
      $this->longdesc = $longdesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getBegin()
    {
      return $this->begin;
    }

    /**
     * @param string $begin
     * @return setType
     */
    public function setBegin($begin)
    {
      $this->begin = $begin;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
      return $this->end;
    }

    /**
     * @param string $end
     * @return setType
     */
    public function setEnd($end)
    {
      $this->end = $end;
      return $this;
    }

    /**
     * @return string
     */
    public function getDur()
    {
      return $this->dur;
    }

    /**
     * @param string $dur
     * @return setType
     */
    public function setDur($dur)
    {
      $this->dur = $dur;
      return $this;
    }

    /**
     * @return string
     */
    public function getRepeatDur()
    {
      return $this->repeatDur;
    }

    /**
     * @param string $repeatDur
     * @return setType
     */
    public function setRepeatDur($repeatDur)
    {
      $this->repeatDur = $repeatDur;
      return $this;
    }

    /**
     * @return nonNegativeDecimalType
     */
    public function getRepeatCount()
    {
      return $this->repeatCount;
    }

    /**
     * @param nonNegativeDecimalType $repeatCount
     * @return setType
     */
    public function setRepeatCount($repeatCount)
    {
      $this->repeatCount = $repeatCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepeat()
    {
      return $this->repeat;
    }

    /**
     * @param int $repeat
     * @return setType
     */
    public function setRepeat($repeat)
    {
      $this->repeat = $repeat;
      return $this;
    }

    /**
     * @return string
     */
    public function getMin()
    {
      return $this->min;
    }

    /**
     * @param string $min
     * @return setType
     */
    public function setMin($min)
    {
      $this->min = $min;
      return $this;
    }

    /**
     * @return string
     */
    public function getMax()
    {
      return $this->max;
    }

    /**
     * @param string $max
     * @return setType
     */
    public function setMax($max)
    {
      $this->max = $max;
      return $this;
    }

    /**
     * @return syncBehaviorType
     */
    public function getSyncBehavior()
    {
      return $this->syncBehavior;
    }

    /**
     * @param syncBehaviorType $syncBehavior
     * @return setType
     */
    public function setSyncBehavior($syncBehavior)
    {
      $this->syncBehavior = $syncBehavior;
      return $this;
    }

    /**
     * @return string
     */
    public function getSyncTolerance()
    {
      return $this->syncTolerance;
    }

    /**
     * @param string $syncTolerance
     * @return setType
     */
    public function setSyncTolerance($syncTolerance)
    {
      $this->syncTolerance = $syncTolerance;
      return $this;
    }

    /**
     * @return syncBehaviorDefaultType
     */
    public function getSyncBehaviorDefault()
    {
      return $this->syncBehaviorDefault;
    }

    /**
     * @param syncBehaviorDefaultType $syncBehaviorDefault
     * @return setType
     */
    public function setSyncBehaviorDefault($syncBehaviorDefault)
    {
      $this->syncBehaviorDefault = $syncBehaviorDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getSyncToleranceDefault()
    {
      return $this->syncToleranceDefault;
    }

    /**
     * @param string $syncToleranceDefault
     * @return setType
     */
    public function setSyncToleranceDefault($syncToleranceDefault)
    {
      $this->syncToleranceDefault = $syncToleranceDefault;
      return $this;
    }

    /**
     * @return restartTimingType
     */
    public function getRestart()
    {
      return $this->restart;
    }

    /**
     * @param restartTimingType $restart
     * @return setType
     */
    public function setRestart($restart)
    {
      $this->restart = $restart;
      return $this;
    }

    /**
     * @return restartDefaultType
     */
    public function getRestartDefault()
    {
      return $this->restartDefault;
    }

    /**
     * @param restartDefaultType $restartDefault
     * @return setType
     */
    public function setRestartDefault($restartDefault)
    {
      $this->restartDefault = $restartDefault;
      return $this;
    }

    /**
     * @return fillTimingAttrsType
     */
    public function getFill()
    {
      return $this->fill;
    }

    /**
     * @param fillTimingAttrsType $fill
     * @return setType
     */
    public function setFill($fill)
    {
      $this->fill = $fill;
      return $this;
    }

    /**
     * @return fillDefaultType
     */
    public function getFillDefault()
    {
      return $this->fillDefault;
    }

    /**
     * @param fillDefaultType $fillDefault
     * @return setType
     */
    public function setFillDefault($fillDefault)
    {
      $this->fillDefault = $fillDefault;
      return $this;
    }

    /**
     * @return IDREF
     */
    public function getTargetElement()
    {
      return $this->targetElement;
    }

    /**
     * @param IDREF $targetElement
     * @return setType
     */
    public function setTargetElement($targetElement)
    {
      $this->targetElement = $targetElement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipcontent()
    {
      return $this->skipcontent;
    }

    /**
     * @param boolean $skipcontent
     * @return setType
     */
    public function setSkipcontent($skipcontent)
    {
      $this->skipcontent = $skipcontent;
      return $this;
    }

}
