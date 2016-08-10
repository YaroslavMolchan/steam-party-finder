@extends('layouts.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Список игр</div>
        <div class="panel-body">
            <div class="thumbnail">
                <div class="users">
                    <a href="http://steamcommunity.com/id/jadson8/" target="_blank">
                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/95/9561d6d2da2e4805bc0bc74f88d7856950412c47.jpg" alt="✪ MY"></a>
                </div>
                <div class="info"></div>
                <div class="buttons"><div>Сейчас в заявке 1 из 5</div>
                    <span class="btn btn-success btn-sm">Вы уже в этом лобби</span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="media">
        <div class="media-left media-middle">
            <a href="#">
                <img class="media-object" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            </a>
        </div>
        <div class="media-body text-left">
            <h4 class="media-heading">{{ $user->name }}</h4>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $user->time_played }}</p>
            <p><i class="fa fa-trophy" aria-hidden="true"></i> {{ $user->win }}%</p>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">With table</h4>
        </div>
        <div class="panel-body">
            <p>Add any non-bordered .table within a panel for a seamless design. If there is a .panel-body, we add an extra border to the top of the table for separation.</p>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Login</th>
                <th>K/D</th>
                <th>Win %</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection