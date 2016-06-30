<?php

namespace RRSVP\WeatherWS;

class ArrayOfForecast implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Forecast[] $Forecast
     */
    protected $Forecast = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Forecast[]
     */
    public function getForecast()
    {
      return $this->Forecast;
    }

    /**
     * @param Forecast[] $Forecast
     * @return \RRSVP\WeatherWS\ArrayOfForecast
     */
    public function setForecast(array $Forecast = null)
    {
      $this->Forecast = $Forecast;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Forecast[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Forecast
     */
    public function offsetGet($offset)
    {
      return $this->Forecast[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Forecast $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Forecast[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Forecast[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Forecast Return the current element
     */
    public function current()
    {
      return current($this->Forecast);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Forecast);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Forecast);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Forecast);
    }

    /**
     * Countable implementation
     *
     * @return Forecast Return count of elements
     */
    public function count()
    {
      return count($this->Forecast);
    }

}
