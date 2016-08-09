<?php

namespace App\Http\Controllers;

use App\Services\Steam;
use App\User;
use Ehesp\SteamLogin\SteamLogin;
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

        $user = User::where('steamid', $steamid)->first();

        if (is_null($user)) {
            $user = User::create([
                'steamid' => $info['steamid'],
                'name' => $info['personaname'],
                'avatar' => $info['avatarfull'],
                'time_played' => ($stats['total_time_played']/60/60),
                'win' => ($stats['total_matches_won']*100/$stats['total_matches_played']),
                'kd_ratio' => ($stats['total_kills']/$stats['total_deaths']),
            ]);
        }

        Auth::login($user);
        return $steam->getSteamid();
    }
}