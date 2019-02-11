@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Editar Etiqueta</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

							@include('admin.categories.partials.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection