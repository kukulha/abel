@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Ver Mensaje</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						<p class="grey-text text-darken-2"><span class="bold">Nombre:</span>  {{ $message->name }}</p>
						<p class="grey-text text-darken-2"><span class="bold">Correo:</span>  {{ $message->email }}</p>
						<p class="grey-text text-darken-2"><span class="bold">Teléfono:</span>  {{ $message->phone }}</p>
						<p class="grey-text text-darken-2"><span class="bold">Mensaje:</span>  {{ $message->body }}</p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection