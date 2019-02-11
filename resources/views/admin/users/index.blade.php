@extends('layouts.app')

@section('content')
	<main>
		<section class="container">
			<h2 class="grey-text text-darken-2">Listado de Usuarios</h2>
			<div class="right"><a href="{{ route('users.create') }}" class="btn btn-small">Crear</a></div>
			<table class="striped">
				<thead>
					<th width="10px">ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th colspan="3">Acciones</th>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td width="10px">
								<a href="{{ route('users.show', $user->id) }}" class="btn btn-small blue">Ver</a>
							</td>
							<td width="10px">
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-small orange">Editar</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-small red">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $users->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection