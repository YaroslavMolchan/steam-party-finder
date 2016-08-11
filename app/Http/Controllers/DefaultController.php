<?php

namespace App\Http\Controllers;

use App\Lobby;
use App\Services\Steam;
use App\User;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function index()
    {
        return view('default.index');
    }

    public function login()
    {
        $steam = new Steam();
        $steam->validate();
        $info = $steam->getInfo();
        $stats = $steam->getStats();

        $steamid = $steam->getSteamid();

        /** @var User $user */
        $user = User::where('steamid', $steamid)->first();

        $params = [
            'steamid' => $info['steamid'],
            'name' => $info['personaname'],
            'avatar' => $info['avatarmedium'],
            'time_played' => ($stats['total_time_played']/60/60),
            'win' => ($stats['total_matches_won']*100/$stats['total_matches_played']),
            'kd_ratio' => ($stats['total_kills']/$stats['total_deaths']),
        ];

        if (is_null($user)) {
            $user = User::create($params);
        }
        else {
            $user->update($params);
        }

        Auth::login($user);
        return redirect('/info');
    }

    public function info()
    {
        return view('default.info', ['user' => Auth::user()]);
    }

    public function configLobby()
    {
        $ranks = [
            'NO RANK',
            'SILVER I',
            'SILVER II',
            'SILVER II',
            'SILVER IV',
            'SILVER ELITE',
            'SILVER ELITE MASTER',
            'GOLD NOVA I',
            'GOLD NOVA II',
            'GOLD NOVA III',
            'GOLD NOVA MASTER',
            'MASTER GUARDIAN I',
            'MASTER GUARDIAN II',
            'MASTER GUARDIAN ELITE',
            'DISTINGUISHED MASTER GUARDIAN',
            'LEGENDARY EAGLE',
            'LEGENDARY EAGLE MASTER',
            'SUPREME MASTER FIRST CLASS',
            'THE GLOBAL ELITE',
        ];

        $types = [
            'Custom',
            'Competitive'
        ];

        $lobby = new Lobby();

        return view('default.config-lobby', compact('lobby', 'ranks', 'types'));
    }
}