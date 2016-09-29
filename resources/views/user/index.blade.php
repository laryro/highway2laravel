@extends('master')

@section('pageTitle', 'Listagem de usuários')

@section('mainContent')
<ul>
    @foreach ($users as $user)
    	<li>{{ $user }}</li>
    @endforeach
</ul>
@endsection
