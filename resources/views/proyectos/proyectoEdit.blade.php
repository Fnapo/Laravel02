@extends('plantilla')

@section('titulo')
Proyectos | Editar un proyecto
@endsection

@section('content')
<div>
    <h1 class="texto-c">Editando un proyecto</h1>
    <br/>
    <form method="POST" action="{{route('proyectos.update', $proyecto->id)}}">
        @method('PATCH')
        <!-- Crea un campo oculto con el method PUTCH -->
        @include('parciales/proyectos/proyectoTomarDatos')
    </form>
</div>
@endsection
