@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Ver Categoria</h2>
			<div class="row">
				<div class="col m8 s12 offset-m2">
					<div class="card-panel">
						<p><strong>Nombre:</strong>  {{ $category->name }}</p>
						<p><strong>Url:</strong>  {{ $category->slug }}</p>
						<p><strong>Descripción:</strong>  {{ $category->body }}</p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection