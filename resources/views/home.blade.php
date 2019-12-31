@extends('plantilla')

@section('titulo')
@lang('Home')
@endsection

@section('contenido')
<div>
    <h1 class="texto-hc">@lang('Home')</h1>
    <br />
    @auth
    <h2 class="fondo-blanco texto-hc">
        {{'Bienvenido: '.auth()->user()->name.'.'}}
    </h2>
    @else
    <h2 class="fondo-blanco texto-hc">
        {{'Bienvenido: '.($nombre ?? 'Invitado').'.'}}
    </h2>
    @endauth
</div>
@endsection
