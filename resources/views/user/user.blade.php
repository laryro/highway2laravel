@extends('master')

@section('pageTitle', 'Exibicao de Usuário')

@section('mainContent')
    <div class="well">
        <p>Usuário #{{ $userId }} {{ $userName }}</p>
    </div>
@endsection
