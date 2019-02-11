@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Ver Etiqueta</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						<p><strong>Nombre:  {{ $tag->name }}</strong></p>
						<p><strong>Url:  {{ $tag->slug }}</strong></p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection