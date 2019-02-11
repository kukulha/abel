@component('mail::message')
# Nuevo contacto desde : {{ route('home') }}

 	Nombre: {{ $data->name }}
 	Correo: {{ $data->email }}
 	Teléfono: {{ $data->phone }}
 	Mensaje: {{ $data->body }}

 	--Este es un mensaje generado automaticamente desde {{ route('home') }}, favor de no responder

@component('mail::button', ['url' => 'http://abel.dev'])
Mi sitio
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent