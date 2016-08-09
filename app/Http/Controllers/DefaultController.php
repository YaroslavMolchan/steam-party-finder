<?php

namespace App\Http\Controllers;

use App\Services\Steam;
use Ehesp\SteamLogin\SteamLogin;

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
        return $steam->getSteamid();
    }
}