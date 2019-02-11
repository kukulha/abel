@extends('layouts.app')

@section('content')
	<main>
		<section class="container">
			<h2 class="grey-text text-darken-2">Listado de Articulos</h2>
			<div class="right"><a href="{{ route('posts.create') }}" class="btn btn-small">Crear</a></div>
			<table class="striped responsive-table">
				<thead>
					<th width="10px">ID</th>
					<th>Titulo</th>
					<th>URL</th>
					<th colspan="3">Acciones</th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->name }}</td>
							<td>{{ $post->slug }}</td>
							<td width="10px">
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-small blue">Ver</a>
							</td>
							<td width="10px">
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-small orange">Editar</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-small red">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $posts->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection