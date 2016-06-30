<?php

class BrondocumentNPS
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
     * @var BrondocumentOmschrijvinge $omschrijving
     */
    protected $omschrijving = null;

    /**
     * @var Gemeentecoderinge $gemeente
     */
    protected $gemeente = null;

    /**
     * @var Gemeentecoderinge $aktegemeente
     */
    protected $aktegemeente = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var NPSGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var NPSElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param boolean $metagegeven
     * @param NPSGroepen $groepsnaam
     * @param NPSElementen $elementnaam
     */
    public function __construct($metagegeven, $groepsnaam, $elementnaam)
    {
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
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
     * @return BrondocumentNPS
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
     * @return BrondocumentNPS
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
     * @return BrondocumentNPS
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
     * @return BrondocumentNPS
     */
    public function setGemeente($gemeente)
    {
      $this->gemeente = $gemeente;
      return $this;
    }

    /**
     * @return Gemeentecoderinge
     */
    public function getAktegemeente()
    {
      return $this->aktegemeente;
    }

    /**
     * @param Gemeentecoderinge $aktegemeente
     * @return BrondocumentNPS
     */
    public function setAktegemeente($aktegemeente)
    {
      $this->aktegemeente = $aktegemeente;
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
     * @return BrondocumentNPS
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return NPSGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param NPSGroepen $groepsnaam
     * @return BrondocumentNPS
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return NPSElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param NPSElementen $elementnaam
     * @return BrondocumentNPS
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
