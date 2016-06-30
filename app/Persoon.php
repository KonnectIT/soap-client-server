<?php

namespace App;

use Illuminate\Http\Request;

class Persoon
{
    /**
     * Begroeting doen
     *
     * @WebMethod
     * @desc Begroeting doen voor de gebruiker
     * @param string $name Naam van mij om te groeten
     * @return string
     */
    public function hallo($name)
    {
        return sprintf('Hallo %s en welkom terug!', $name);
    }
}