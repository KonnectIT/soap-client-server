<?php

class BrondocumentBRA
{

    /**
     * @var DocumentNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var Datume $datum
     */
    protected $datum = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var Groepsnaam $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @param boolean $metagegeven
     * @param Groepsnaam $groepsnaam
     */
    public function __construct($metagegeven, $groepsnaam)
    {
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
    }

    /**
     * @return DocumentNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param DocumentNummeringe $identificatie
     * @return BrondocumentBRA
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return Datume
     */
    public function getDatum()
    {
      return $this->datum;
    }

    /**
     * @param Datume $datum
     * @return BrondocumentBRA
     */
    public function setDatum($datum)
    {
      $this->datum = $datum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetagegeven()
    {
      return $this->metagegeven;
    }

    /**
     * @param boolean $metagegeven
     * @return BrondocumentBRA
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return Groepsnaam
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param Groepsnaam $groepsnaam
     * @return BrondocumentBRA
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

}
