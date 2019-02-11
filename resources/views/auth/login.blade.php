@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col m10 offset-m1 s12">
            <div class="card-panel">
                <h2 class="grey-text text-darken-2 center">Iniciar Sesión</h2>

                    {!! Form::open(['route' => 'login']) !!}

                        <div class="input-field">
                            {{ Form::label('email', 'Correo Electrónico')  }}
                            {{ Form::email('email', null) }}
                        </div>

                        <div class="input-field">
                            {{ Form::label('password', 'Contraseña')  }}
                            {{ Form::password('password', null) }}
                        </div>
                        
                        <div class="input-field">
                            <p>
                              <label>
                                {{ Form::checkbox('remember')}}
                                <span>Recordar</span>
                              </label>
                            </p>
                        </div>

                        <div class="input-field">
                            {{ Form::submit('Login', ['class' => 'btn btn-small red accent-4']) }}
                            @if (Route::has('password.request'))
                                <a class="btn btn-small red accent-4" href="{{ route('password.request') }}">
                                    {{ __('¿Olvido su contraseña?') }}
                                </a>
                            @endif
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
