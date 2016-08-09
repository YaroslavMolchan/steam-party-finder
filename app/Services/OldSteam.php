<?php
namespace AppBundle\DependencyInjection;

use Ehesp\SteamLogin\SteamLogin;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SteamHelper
{
    const API_KEY = '34D64867B6E66B07012D664F57967DAE';

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function login()
    {
        $login = new SteamLogin();
        $url = $this->container->get('router')->generate('fos_user_registration_register', [], UrlGeneratorInterface::ABSOLUTE_URL);
        return $login->url($url);
    }

    public function validate()
    {
        $result = [
            'status' => false,
            'user' => null
        ];

        $login = new SteamLogin();

        try {
            $steamid = $login->validate();
        } catch (Exception $e) {
            $steamid = null;
        }

        if (!is_null($steamid)) {
            $info = $this->info($steamid);
            $stats = $this->stats($steamid);
            $result = [
                'status' => true,
                'user' => [
                    'steamid' => $info['steamid'],
                    'username' => $info['personaname'],
                    'avatar' => $info['avatarmedium'], //avatarfull
                    'win' => $stats['total_matches_won'] * 100 / $stats['total_matches_played'],
                    'kd_ratio' => $stats['total_kills'] / $stats['total_deaths'],
                    'time_played' => $stats['total_time_played'] / 60 / 60
                ]
            ];
        }
        return $result;
    }

    public function info($steamid)
    {
        $result = [
            'steamid' => '',
            'avatar' => '',
        ];

        $client = $this->container->get('guzzle.client.steam');

        $response = $client->get('/ISteamUser/GetPlayerSummaries/v0002/?key=' . self::API_KEY . '&steamids=' . $steamid);

        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $raw = json_decode($json, true);
            $result = $raw['response']['players'][0];
        }
        return $result;
    }

    public function stats($steamid)
    {
        $result = [];

        $client = $this->container->get('guzzle.client.steam');

        $response = $client->get('/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=' . self::API_KEY . '&steamid=' . $steamid);

        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $raw = json_decode($json, true);
            $data = $raw['playerstats']['stats'];
            foreach ($data as $one) {
                if (in_array($one['name'], ['total_kills', 'total_deaths', 'total_time_played', 'total_matches_won', 'total_matches_played'])) {
                    $result[$one['name']] = $one['value'];
                }
            }
        }
        return $result;
    }
}