@extends('layouts.app')

@section('content')
	<main>
		<section class="section container center">
			<h2>Ver Categoria</h2>
			<div class="row">
				<div class="col m10 s12 offset-m1">
					<div class="card-panel">
						<img src="{{ $post->file }}" class="responsive-img" alt="">
						<p><strong>Nombre:</strong>  {{ $post->name }}</p>
						<p><strong>Url:</strong>  {{ $post->slug }}</p>
						<p><strong>Descripción:</strong>  {{ $post->body }}</p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection