@extends('layouts.app')

@section('content')
	<main>
		<div class="hero">
			<div class="valign-wrapper">
				<div class="container">
					<div class="center">
						<h1 class="white-text">¡Estrena tu Auto!</h1>
						<a href="#contacto" class="btn red accent-4">Contáctanos <i class="material-icons right">call_made</i></a>
					</div>
				</div>
			</div>
		</div>

		<section class="section container">
			<div class="center">
				<div class="row">
					<div class="col m3 s12">
						<div class="card red accent-4">
							<img src="/img/autos.png" class="responsive-img" alt="">
						</div>
						<p class="grey-text">Autos</p>
						
					</div>
					<div class="col m3 s12">
						<div class="card red accent-4">
							<img src="/img/creditos.png" class="responsive-img" alt="">
						</div>
						<p class="grey-text">Creditos y Arrendamientos</p>
						
					</div>
					<div class="col m3 s12">
						<div class="card red accent-4">
							<img src="/img/seguros.png" class="responsive-img" alt="">
						</div>
						<p class="grey-text">Seguros y Autopartes</p>
					</div>
					<div class="col m3 s12">
						<div class="card red accent-4">
							<img src="/img/flotillas.png" class="responsive-img" alt="">
						</div>
						<p class="grey-text">Flotillas</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section container">
			<div class="row">
				<div class="col m6 s12 blog">
					<div class="card z-depth-0">
						<div class="card-image">
							<img src="/img/blog.png" class="responsive-img" alt="">
							<span class="card-title red-text text-accent-4">Ultimas noticias</span>
						</div>
					</div>
				</div>
				<div class="col m6 s12">
					@foreach($posts as $post)
						<div class="col s12">
							<div class="card">
								<div class="card-image">
									<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
									<a href="{{ route('post', $post->slug) }}"><span class="card-title">{{ $post->name }}</span></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>

		<section>
			<div class="contacto section scrollspy" id="contacto">
				<div class="container center">
					<h2 class="white-text ">¡Estrena tu Nissan!</h2>
					<div class="row">
					<div class="col m6 s12">
						{!! Form::open(['route' => 'messages.store']) !!}
						
						<div class="input-field">
							{!! Form::label('name', 'Nombre', ['class' => 'white-text']) !!}
							{!! Form::text('name', null, ['class' => 'white-text']) !!}
						</div>
						<div class="input-field">
							{!! Form::label('email', 'Correo', ['class' => 'white-text']) !!}
							{!! Form::email('email', null, ['class' => 'white-text']) !!}
						</div>
						<div class="input-field">
							{!! Form::label('phone', 'Teléfono', ['class' => 'white-text']) !!}
							{!! Form::text('phone', null, ['class' => 'white-text']) !!}
						</div>
						<div class="input-field">
							{!! Form::label('body', 'Mensaje', ['class' => 'white-text']) !!}
							{!! Form::textarea('body', null, ['class' => 'materialize-textarea white-text']) !!}
						</div>

						<div class="input-field">
							{!! Form::submit('Quiero mi auto', ['class' => 'btn btn-small right red accent-4']) !!}
						</div>
						

						{!! Form::close() !!}
					</div>
				</div>
				</div>
			</div>
		</section>
	</main>
@endsection