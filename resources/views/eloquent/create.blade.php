@extends('master')

@section('mainContent')

	<form action="{{ route('eloquent.client.store') }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="name">Nome:</label>
		<input type="text" id="name" name="name">
		<label for="address">Endereço:</label>
		<input type="text" id="address" name="address">
		<button type="submit">Enviar</button>
	</form>
	
@stop