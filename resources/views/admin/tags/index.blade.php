@extends('layouts.app')

@section('content')
	<main>
		<section class="container">
			<h2 class="grey-text text-darken-2">Listado de Etiquetas</h2>
			<div class="right"><a href="{{ route('tags.create') }}" class="btn btn-small">Crear</a></div>
			<table class="striped">
				<thead>
					<th width="10px">ID</th>
					<th>Etiqueta</th>
					<th colspan="3">Acciones</th>
				</thead>
				<tbody>
					@foreach($tags as $tag)
						<tr>
							<td>{{ $tag->id }}</td>
							<td>{{ $tag->name }}</td>
							<td width="10px">
								<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-small blue">Ver</a>
							</td>
							<td width="10px">
								<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-small orange">Editar</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-small red">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $tags->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection