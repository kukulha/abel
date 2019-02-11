{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="input-field">
	<br>
	{{ Form::label('category_id', 'Categorias') }}
	{{ Form::select('category_id', $categories, null) }}
</div>

<div class="input-field">
	{{ Form::label('name', 'Nombre del Articulo') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
</div>

<div class="file-field field-input">
	<div class="btn btn-small red accent-4">
		<span>Imagen</span>
		{{ Form::file('file', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null ,['class' => 'file-path'])}}
	</div>
</div>

<div class="row">
			<div class="col s12">
				{{ Form::label('status', 'Estado') }}
				<br>
				<p style="display:inline">
					<label>
						{{ Form::radio('status', 'PUBLISHED') }}
						<span>Publicado</span>
					</label>
				</p>
				<p style="display:inline">
					<label>
						{{ Form::radio('status', 'DRAFT') }}
						<span>Borrador</span>
					</label>
				</p>
			</div>
		</div>


		<div class="row">
			<div class="col s12">
				{{ Form::label('tags', 'Etiquetas')}}
				<br>

					@foreach($tags as $tag)
					<p style="display:inline">&nbsp;
						<label>
							{{ Form::checkbox('tags[]', $tag->id)}} 
							<span>{{ $tag->name }}</span>
						</label>
					</p>
					@endforeach
			</div>
		</div>

		<div class="input-field">
			{{ Form::label('excerpt', 'Extracto') }}
			{{ Form::textarea('excerpt', null , ['class' => 'materialize-textarea'])}}
		</div>

<div class="input-field">
			{{ Form::label('body', 'Contenido') }}
			<br>
			<br>
			{{ Form::textarea('body', null , ['class' => 'materialize-textarea'])}}
		</div>

<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-small red accent-4'])  }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			CKEDITOR.config.height = 400;
			CKEDITOR.config.width = 'auto';

			CKEDITOR.replace('body');
		});
	</script>
@endsection