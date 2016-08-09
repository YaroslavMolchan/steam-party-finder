<?php

namespace App\Services;

use Ehesp\SteamLogin\SteamLogin;

class Steam
{
    const API_KEY = '34D64867B6E66B07012D664F57967DAE';

    private $steamid;

    public function validate()
    {
        $steam = new SteamLogin();
        $this->setSteamid($steam->validate());
        return true;
    }

    /**
     * @param int $steamid
     */
    public function setSteamid($steamid)
    {
        $this->steamid = $steamid;
    }

    /**
     * @return mixed
     */
    public function getSteamid()
    {
        return $this->steamid;
    }
}