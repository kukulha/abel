@extends('layouts.app')

@section('content')
	<main>
		<section class="container">
			<h2 class="grey-text text-darken-2">Listado de Categorias</h2>
			<div class="right"><a href="{{ route('categories.create') }}" class="btn btn-small">Crear</a></div>
			<table class="striped">
				<thead>
					<th width="10px">ID</th>
					<th>Categoria</th>
					<th>Descripción</th>
					<th colspan="3">Acciones</th>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->body }}</td>
							<td width="10px">
								<a href="{{ route('categories.show', $category->id) }}" class="btn btn-small blue">Ver</a>
							</td>
							<td width="10px">
								<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-small orange">Editar</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-small red">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $categories->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection