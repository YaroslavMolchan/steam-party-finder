<?php

namespace App\Services;

use Ehesp\SteamLogin\SteamLogin;
use GuzzleHttp\Client;

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

    public function getInfo()
    {
        $client = new Client();
        $response = $client->get('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . self::API_KEY . '&steamids=' . $this->steamid);
        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $raw = json_decode($json, true);
            $result = $raw['response']['players'][0];
        }
        else {
            $result = null;
        }
        return $result;
    }

    public function getStats()
    {
        $client = new Client();
        $response = $client->get('http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=' . self::API_KEY . '&steamid=' . $this->steamid);
        if ($response->getStatusCode() == 200) {
            $result = [];
            $json = $response->getBody();
            $raw = json_decode($json, true);
            $data = $raw['playerstats']['stats'];
            foreach ($data as $one) {
                if (in_array($one['name'], ['total_kills', 'total_deaths', 'total_time_played', 'total_matches_won', 'total_matches_played'])) {
                    $result[$one['name']] = $one['value'];
                }
            }
        }
        else {
            $result = null;
        }
        return $result;
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