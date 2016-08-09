@extends('layouts.main')

@section('content')
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </form>
    @include('errors.list')
@endsection