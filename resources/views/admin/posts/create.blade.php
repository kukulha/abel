@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Crear Articulo</h2>
			<div class="row">
				<div class="col s12 ">
					<div class="card-panel">
						{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}

							@include('admin.posts.partials.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
