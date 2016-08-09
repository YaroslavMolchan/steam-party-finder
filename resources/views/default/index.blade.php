@extends('layouts.main')

@section('content')
    <a href="{{ SteamLogin::url(url('/login')) }}" target="_blank">link</a>
@endsection