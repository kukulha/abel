@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Editar Etiqueta</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

							@include('admin.tags.partials.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection