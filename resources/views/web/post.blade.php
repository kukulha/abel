@extends('layouts.app')

@section('content')
	<main>
		<main>
		<section class="section container ">
			<h1 class="grey-text center">{{ $post->name }}</h1>
				<div class="card col m6 s12">
					<div class="card-image">
						@if($post->file)
							<img src="{{ Storage::url($post->file) }}" class="reponsive-img">
						@endif
					</div>

					<div class="card-stacked">
	        			<div class="card-content">
	        				<p class="grey-text center">Author: {{ $post->user->name }}</p>
	        				<p class="grey-text center">Fecha: {{ $post->created_at }}</p>
	        				<hr>
	          				<p class="grey-text text-darken-2 small">{!! $post->body !!}</p>
	        			</div>
	        			<div class="card-action">
	        				<p class="grey-text">Categorias : <a href="{{ route('category', $post->category->slug) }}" class="blue-text">{{ $post->category->name }}</a></p>
	        				<p class="grey-text">Etiquetas: 
								@foreach($post->tags as $tag)
									<a href="{{ route('tag', $tag->slug) }}" class="blue-text">{{ $tag->name }}</a>
								@endforeach
	        				</p>
	        			</div>
	      			</div>
				</div>
		</section>
	</main>
	</main>
@endsection