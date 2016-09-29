@extends('master')

@section('mainContent')

	<form action="{{ route('admin.client.store') }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="retorno">
		<button type="submit">Enviar</button>
	</form>
	
@stop