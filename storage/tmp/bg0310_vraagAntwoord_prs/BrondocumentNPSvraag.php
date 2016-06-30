<?php

namespace RRSVP\Stuf;

class BrondocumentNPSvraag
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
     * @return DocumentNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param DocumentNummeringe $identificatie
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
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
     * @return \RRSVP\Stuf\BrondocumentNPS-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
