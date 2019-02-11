@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Editar Usuario</h2>
			<div class="row">
				<div class="col m10 s12 offset-m1">
					<div class="card-panel">
						{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

							@include('admin.users.partials.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection