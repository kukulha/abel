@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Ver Usuario</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						<p><strong>Nombre:</strong>  {{ $user->name }}</p>
						<p><strong>Email:</strong>  {{ $user->email }}</p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection