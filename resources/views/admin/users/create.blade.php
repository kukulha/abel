@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Crear Usuario</h2>
			<div class="row">
				<div class="col m10 s12 offset-m1">
					<div class="card-panel">
						{!! Form::open(['route' => 'users.store']) !!}

							@include('admin.users.partials.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
