@extends('layouts.app')

@section('content')
	<main>
		<section class="container">
			<h2 class="grey-text text-darken-2">Listado de Mensajes</h2>
			<table class="striped responsive-table">
				<thead>
					<th>Nombre</th>
					<th>Email</th>
					<th>Teléfono</th>
					<th>Fecha</th>
					<th colspan="2">Acciones</th>
				</thead>
				<tbody>
					@foreach($messages as $message)
						<tr>
							<td>{{ $message->name }}</td>
							<td>{{ $message->email }}</td>
							<td>{{ $message->phone }}</td>
							<td>{{ $message->created_at }}</td>
							<td width="10px">
								<a href="{{ route('messages.show', $message->id) }}" class="btn btn-small blue">Ver</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-small red">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $messages->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection