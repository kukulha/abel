@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-panel">
                <h2 class="grey-text text-darken-2 center">Restablecer su contraseña</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'password.email']) !!}
                        <div class="input-field">
                            {{ Form::label('email', 'Correo electrónico') }}
                            {{ Form::email('email', null) }}
                        </div>

                        <div class="inout-field">
                            {{ Form::submit('Enviar link para restablecer', ['class' => 'btn btn-small red accent-4']) }}
                        </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
