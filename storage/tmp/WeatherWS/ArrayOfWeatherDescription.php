<?php

namespace RRSVP\WeatherWS;

class ArrayOfWeatherDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WeatherDescription[] $WeatherDescription
     */
    protected $WeatherDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WeatherDescription[]
     */
    public function getWeatherDescription()
    {
      return $this->WeatherDescription;
    }

    /**
     * @param WeatherDescription[] $WeatherDescription
     * @return \RRSVP\WeatherWS\ArrayOfWeatherDescription
     */
    public function setWeatherDescription(array $WeatherDescription = null)
    {
      $this->WeatherDescription = $WeatherDescription;
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
      return isset($this->WeatherDescription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WeatherDescription
     */
    public function offsetGet($offset)
    {
      return $this->WeatherDescription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WeatherDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->WeatherDescription[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->WeatherDescription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WeatherDescription Return the current element
     */
    public function current()
    {
      return current($this->WeatherDescription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WeatherDescription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WeatherDescription);
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
      reset($this->WeatherDescription);
    }

    /**
     * Countable implementation
     *
     * @return WeatherDescription Return count of elements
     */
    public function count()
    {
      return count($this->WeatherDescription);
    }

}
