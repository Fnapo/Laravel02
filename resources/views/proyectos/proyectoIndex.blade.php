@extends('plantilla')

@section('titulo', 'Proyectos')

@section('content')
<!-- Lo cambio a tabla

<ul>
    <li>

    </li>
    <br />
    <li>
    -->

<!--
</li>
<li>
</li>
</ul>
-->
<!-- Para indentar -->
<div>
    <?php $vacio = "Sin proyectos para mostrar"; ?>
    <h1 class="texto-c">Proyectos</h1>
    <br/>
    @auth
    <div class="texto-c">
        <button class="caja-boton bordes-2">
            <a class="boton-normal" href="{{route('proyectos.create')}}">{{'Crear un proyecto'}}</a>
        </button>
    </div>
    <br/>
    @endauth
    @isset($proyectos)
    <div class="centraTabla">
        <table class="tabla tabla-i-b colapsada">
            <thead>
                @if ($proyectos->count() > 0)
                <tr>
                    <th class="celda">{{'Título del proyecto'}}</th>
                    @auth
                    <th class="celda" colspan="2">
                        {{'Acciones'}}
                    </th>
                    @endauth
                </tr>
                @else
                <tr>
                    <th class="celda">{{$vacio}}</th>
                </tr>
                @endif
            </thead>
            <tbody>
                @forelse ($proyectos as $proyecto)
                <tr>
                    <td class="celda" title="Haz click para verlo">
                        <a class="color-az" href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->titulo}}</a>
                        <!-- route('nombre', parámetros)-->
                    </td>
                    @auth
                    <td class="celda">
                        <button type="button" class="caja-boton bordes-2">
                            <a class="boton-normal" href="{{route('proyectos.edit', $proyecto->id)}}">{{'Editar'}}</a>
                        </button>
                    </td>
                    <td class="celda">
                        <!-- Para borrar necessito un pequeño form pues se utiliza el 'falso method' delete -->
                        <form method="POST" action="{{route('proyectos.destroy', $proyecto->id)}}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="boton-peligro pad-4" value="Borrar">
                        </form>
                    </td>
                    @endauth
                </tr>
                @empty
                <tr>
                    <td class="celda">{{$vacio}}</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot></tfoot>
        </table>
        <div class="texto-c">{{$proyectos->links()}}</div>
    </div>
    @else
    <!-- del isset -->
    <h2>
        {{$vacio}}
    </h2>
    @endisset
</div>
@endsection
