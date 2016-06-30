<?php

namespace RRSVP\Stuf;

class KOZKOZVANvraagSelectie
{

    /**
     * @var KOZgerelateerdeKOZVraagSelectie $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @var Maateenheid82e $overgangsgrootte
     */
    protected $overgangsgrootte = null;

    /**
     * @var OnroerendeZaakHistoriee $aard
     */
    protected $aard = null;

    /**
     * @var BrondocumentBRKvraag $brondocument
     */
    protected $brondocument = null;

    /**
     * @var TijdvakRelatie $tijdvakRelatie
     */
    protected $tijdvakRelatie = null;

    /**
     * @var Tijdstipe $tijdstipRegistratie
     */
    protected $tijdstipRegistratie = null;

    /**
     * @var ExtraElementen $extraElementen
     */
    protected $extraElementen = null;

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
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @var AardAantal $aardAantal
     */
    protected $aardAantal = null;

    /**
     * @param TijdvakRelatie $tijdvakRelatie
     * @param Tijdstipe $tijdstipRegistratie
     * @param ExtraElementen $extraElementen
     * @param Entiteittype $entiteittype
     * @param NoValue $noValue
     * @param Verwerkingssoort $verwerkingssoort
     * @param AantalVoorkomens $aantalVoorkomens
     * @param AardAantal $aardAantal
     */
    public function __construct($tijdvakRelatie, $tijdstipRegistratie, $extraElementen, $entiteittype, $noValue, $verwerkingssoort, $aantalVoorkomens, $aardAantal)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
      $this->tijdstipRegistratie = $tijdstipRegistratie;
      $this->extraElementen = $extraElementen;
      $this->entiteittype = $entiteittype;
      $this->noValue = $noValue;
      $this->verwerkingssoort = $verwerkingssoort;
      $this->aantalVoorkomens = $aantalVoorkomens;
      $this->aardAantal = $aardAantal;
    }

    /**
     * @return KOZgerelateerdeKOZVraagSelectie
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param KOZgerelateerdeKOZVraagSelectie $gerelateerde
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

    /**
     * @return Maateenheid82e
     */
    public function getOvergangsgrootte()
    {
      return $this->overgangsgrootte;
    }

    /**
     * @param Maateenheid82e $overgangsgrootte
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setOvergangsgrootte($overgangsgrootte)
    {
      $this->overgangsgrootte = $overgangsgrootte;
      return $this;
    }

    /**
     * @return OnroerendeZaakHistoriee
     */
    public function getAard()
    {
      return $this->aard;
    }

    /**
     * @param OnroerendeZaakHistoriee $aard
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setAard($aard)
    {
      $this->aard = $aard;
      return $this;
    }

    /**
     * @return BrondocumentBRKvraag
     */
    public function getBrondocument()
    {
      return $this->brondocument;
    }

    /**
     * @param BrondocumentBRKvraag $brondocument
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setBrondocument($brondocument)
    {
      $this->brondocument = $brondocument;
      return $this;
    }

    /**
     * @return TijdvakRelatie
     */
    public function getTijdvakRelatie()
    {
      return $this->tijdvakRelatie;
    }

    /**
     * @param TijdvakRelatie $tijdvakRelatie
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setTijdvakRelatie($tijdvakRelatie)
    {
      $this->tijdvakRelatie = $tijdvakRelatie;
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
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setExtraElementen($extraElementen)
    {
      $this->extraElementen = $extraElementen;
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
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
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
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setVerwerkingssoort($verwerkingssoort)
    {
      $this->verwerkingssoort = $verwerkingssoort;
      return $this;
    }

    /**
     * @return AantalVoorkomens
     */
    public function getAantalVoorkomens()
    {
      return $this->aantalVoorkomens;
    }

    /**
     * @param AantalVoorkomens $aantalVoorkomens
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setAantalVoorkomens($aantalVoorkomens)
    {
      $this->aantalVoorkomens = $aantalVoorkomens;
      return $this;
    }

    /**
     * @return AardAantal
     */
    public function getAardAantal()
    {
      return $this->aardAantal;
    }

    /**
     * @param AardAantal $aardAantal
     * @return \RRSVP\Stuf\KOZKOZVAN-vraagSelectie
     */
    public function setAardAantal($aardAantal)
    {
      $this->aardAantal = $aardAantal;
      return $this;
    }

}
