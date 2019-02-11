@extends('layouts.app')

@section('content')
	<main>
		<section class="section container">
			
			<div class="row">
				<div class="col m9 s12 center">
					<h3 class="grey-text">Lista de Noticias</h3>
					@foreach ($posts as $post)
					
						<div class="card">
							<div class="card-image">
								@if($post->file)
									<img src="{{ Storage::url($post->file) }}" class="reponsive-img">
								@endif
							</div>

							<div class="card-stacked">
			        			<div class="card-content">
			        				<a href="{{ route('post', $post->slug) }}"><span class="card-title">{{ $post->name }}</span></a>
			        				<p class="grey-text">Author: {{ $post->user->name }}</p>
			          				<p class="grey-text text-darken-2">{{ $post->excerpt}}</p>
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
					@endforeach
				</div>
				<div class="col m3 s12">
					<h3 class="grey-text center">Categorias</h3>
					<ul>
					@if($categories)
						@foreach($categories as $category)
							<li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
							<hr>
						@endforeach
					@endif
					</ul>
				</div>

			</div>
			<div class="center">
				{{ $posts->links('pagination::default') }}
			</div>
		</section>
	</main>
@endsection