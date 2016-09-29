@extends('master')

@section('pageTitle', 'Listagem de usuários')

@section('mainContent')



    @if(Session::has('flash_message'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
    @endif

    <h1>Listagem de Usuários</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->id }} {{ $user->name }} {{ $user->email }}</li>
        @endforeach
    </ul>


    <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add new user</a>
@endsection
