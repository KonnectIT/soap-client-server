<?php

namespace RRSVP\Stuf;

class WRDvraag
{

    /**
     * @var Peildatume $waardepeildatum
     */
    protected $waardepeildatum = null;

    /**
     * @var Peildatume $toestandspeildatum
     */
    protected $toestandspeildatum = null;

    /**
     * @var Maateenheid11e $vastgesteldeWaarde
     */
    protected $vastgesteldeWaarde = null;

    /**
     * @var BeschikkingGrpvraag $beschikking
     */
    protected $beschikking = null;

    /**
     * @var InOnderzoekWRDvraag $inOnderzoek
     */
    protected $inOnderzoek = null;

    /**
     * @var TijdvakObject $tijdvakObject
     */
    protected $tijdvakObject = null;

    /**
     * @var TijdvakGeldigheid $tijdvakGeldigheid
     */
    protected $tijdvakGeldigheid = null;

    /**
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

    /**
     * @var WRDWOZvraag $isVoor
     */
    protected $isVoor = null;

    /**
     * @var Entiteittype $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var Verwerkingssoort $verwerkingssoort
     */
    protected $verwerkingssoort = null;

    /**
     * @param TijdvakObject $tijdvakObject
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     */
    public function __construct($tijdvakObject, $tijdvakGeldigheid, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $verwerkingssoort)
    {
      $this->tijdvakObject = $tijdvakObject;
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->verwerkingssoort = $verwerkingssoort;
    }

    /**
     * @return Peildatume
     */
    public function getWaardepeildatum()
    {
      return $this->waardepeildatum;
    }

    /**
     * @param Peildatume $waardepeildatum
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setWaardepeildatum($waardepeildatum)
    {
      $this->waardepeildatum = $waardepeildatum;
      return $this;
    }

    /**
     * @return Peildatume
     */
    public function getToestandspeildatum()
    {
      return $this->toestandspeildatum;
    }

    /**
     * @param Peildatume $toestandspeildatum
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setToestandspeildatum($toestandspeildatum)
    {
      $this->toestandspeildatum = $toestandspeildatum;
      return $this;
    }

    /**
     * @return Maateenheid11e
     */
    public function getVastgesteldeWaarde()
    {
      return $this->vastgesteldeWaarde;
    }

    /**
     * @param Maateenheid11e $vastgesteldeWaarde
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setVastgesteldeWaarde($vastgesteldeWaarde)
    {
      $this->vastgesteldeWaarde = $vastgesteldeWaarde;
      return $this;
    }

    /**
     * @return BeschikkingGrpvraag
     */
    public function getBeschikking()
    {
      return $this->beschikking;
    }

    /**
     * @param BeschikkingGrpvraag $beschikking
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setBeschikking($beschikking)
    {
      $this->beschikking = $beschikking;
      return $this;
    }

    /**
     * @return InOnderzoekWRDvraag
     */
    public function getInOnderzoek()
    {
      return $this->inOnderzoek;
    }

    /**
     * @param InOnderzoekWRDvraag $inOnderzoek
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setInOnderzoek($inOnderzoek)
    {
      $this->inOnderzoek = $inOnderzoek;
      return $this;
    }

    /**
     * @return TijdvakObject
     */
    public function getTijdvakObject()
    {
      return $this->tijdvakObject;
    }

    /**
     * @param TijdvakObject $tijdvakObject
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setTijdvakObject($tijdvakObject)
    {
      $this->tijdvakObject = $tijdvakObject;
      return $this;
    }

    /**
     * @return TijdvakGeldigheid
     */
    public function getTijdvakGeldigheid()
    {
      return $this->tijdvakGeldigheid;
    }

    /**
     * @param TijdvakGeldigheid $tijdvakGeldigheid
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setTijdvakGeldigheid($tijdvakGeldigheid)
    {
      $this->tijdvakGeldigheid = $tijdvakGeldigheid;
      return $this;
    }

    /**
     * @return Tijdstipe
     */
    public function getTijdstipRegistratie()
    {
      return $this->tijdstipRegistratie;
    }

    /**
     * @param Tijdstipe $tijdstipRegistratie
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setTijdstipRegistratie($tijdstipRegistratie)
    {
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      return $this;
    }

    /**
     * @return ExtraElementen
     */
    public function getExtraElementen()
    {
      return $this->extraElementen;
    }

    /**
     * @param ExtraElementen $extraElementen
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
      return $this;
    }

    /**
     * @return WRDWOZvraag
     */
    public function getIsVoor()
    {
      return $this->isVoor;
    }

    /**
     * @param WRDWOZvraag $isVoor
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setIsVoor($isVoor)
    {
      $this->isVoor = $isVoor;
      return $this;
    }

    /**
     * @return Entiteittype
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param Entiteittype $entiteittype
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

    /**
     * @return NoValue
     */
    public function getNoValue()
    {
      return $this->noValue;
    }

    /**
     * @param NoValue $noValue
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return Verwerkingssoort
     */
    public function getVerwerkingssoort()
    {
      return $this->verwerkingssoort;
    }

    /**
     * @param Verwerkingssoort $verwerkingssoort
     * @return \RRSVP\Stuf\WRD-vraag
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

}
