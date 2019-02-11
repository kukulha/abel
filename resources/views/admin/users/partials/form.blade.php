<div class="input-field">
	{{ Form::label('name', 'Nombre de Usuario') }}
	{{ Form::text('name', null) }}
</div>

<div class="input-field">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null) }}
</div>

<div class="input-field">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', null) }}
</div>

<div class="input-field">
	{{ Form::label('password_confirmation', 'Confirmar Contraseña') }}
	{{ Form::password('password_confirmation', null) }}
</div>

<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-small blue'])  }}
</div>
