@extends('master')

@section('mainContent')
	<a href="{{ route('eloquent.client.create') }}" class="btn btn-default" title="">Cadastrar cliente</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Endereço</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clients as $client)
				<tr>
					<td>{{ $client->id }}</td>
					<td>{{ $client->name }}</td>
					<td>{{ $client->address }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection