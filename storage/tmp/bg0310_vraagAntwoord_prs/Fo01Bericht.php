<?php

namespace RRSVP\Stuf;

class Fo01Bericht
{

    /**
     * @var stuurgegevens $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var Foutbericht $body
     */
    protected $body = null;

    /**
     * @param stuurgegevens $stuurgegevens
     * @param Foutbericht $body
     */
    public function __construct($stuurgegevens, $body)
    {
      $this->stuurgegevens = $stuurgegevens;
      $this->body = $body;
    }

    /**
     * @return stuurgegevens
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevens $stuurgegevens
     * @return \RRSVP\Stuf\Fo01Bericht
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return Foutbericht
     */
    public function getBody()
    {
      return $this->body;
    }

    /**
     * @param Foutbericht $body
     * @return \RRSVP\Stuf\Fo01Bericht
     */
    public function setBody($body)
    {
      $this->body = $body;
      return $this;
    }

}
