@extends('master')

@section('pageTitle', 'Create user')

@section('mainContent')
    <h1>Create user</h1>


    <form action="{{ route('user.post') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ul class="list-unstyled">
            <li class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" name="name" id="name">
                {{ $errors->first('name') }}
            </li>
            <li class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
                {{ $errors->first('email') }}
            </li>
            <li class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" id="password">
                {{ $errors->first('password') }}
            </li>
            <li class="form-group">
                <label for="password_confirmation">Confirm password:</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </li>
        </ul>
        <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-floppy-disk"></i> Create</button>
    </form>
@endsection