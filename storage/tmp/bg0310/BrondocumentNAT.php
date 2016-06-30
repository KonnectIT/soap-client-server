<?php

class BrondocumentNAT
{

    /**
     * @var Datume $datum
     */
    protected $datum = null;

    /**
     * @var BrondocumentOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var Gemeentecoderinge $gemeente
     */
    protected $gemeente = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var Groepsnaam $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var Groepsnaam $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param boolean $metagegeven
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
     */
    public function __construct($metagegeven, $groepsnaam, $elementnaam)
    {
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
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
     * @return BrondocumentNAT
     */
    public function setDatum($datum)
    {
      $this->datum = $datum;
      return $this;
    }

    /**
     * @return BrondocumentOmschrijvinge
     */
    public function getOmschrijving()
    {
      return $this->omschrijving;
    }

    /**
     * @param BrondocumentOmschrijvinge $omschrijving
     * @return BrondocumentNAT
     */
    public function setOmschrijving($omschrijving)
    {
      $this->omschrijving = $omschrijving;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getGemeente()
    {
      return $this->gemeente;
    }

    /**
     * @param Gemeentecoderinge $gemeente
     * @return BrondocumentNAT
     */
    public function setGemeente($gemeente)
    {
      $this->gemeente = $gemeente;
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
     * @return BrondocumentNAT
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
     * @return BrondocumentNAT
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return Groepsnaam
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param Groepsnaam $elementnaam
     * @return BrondocumentNAT
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
