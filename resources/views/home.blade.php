@extends('plantilla')

@section('titulo')
@lang('Home')
@endsection

@section('contenido')
<div>
    <h1 class="texto-c">@lang('Home')</h1>
    <br />
    @auth
    <h2 class="fondo-alice texto-c">
        {{'Bienvenido: '.auth()->user()->name.'.'}}
    </h2>
    @else
    <h2 class="fondo-alice texto-c">
        {{'Bienvenido: '.($nombre ?? 'Invitado').'.'}}
    </h2>
    @endauth
</div>
@endsection
