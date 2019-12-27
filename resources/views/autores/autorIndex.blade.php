@extends('plantilla')

@section('nombre', 'Autores')

@section('contenido')
<div>
    <?php
        $vacio="Sin autores para mostrar";
        $desconocido='Desconocido(s)';
    ?>
    <h1 class="texto-c">{{'Autores'}}</h1>
    <br />
    <div class="texto-c">
        <button class="caja-boton bordes-2">
            <a class="boton-normal" href="{{route('autores.create')}}">{{'Introducir un autor'}}</a>
        </button>
    </div>
    <br />
    @isset($autores)
    <div class="centraTabla">
        @if ($autores->count() > 0)
        <table class="tabla tabla-i-b colapsada">
            <thead>
                <tr>
                    <th class="celda" rowspan="2">{{'Nombre del autor'}}</th>
                    <th class="celda" rowspan="2">{{'Apellido(s) del autor'}}</th>
                    <th class="celda" colspan="2">{{'Año de'}}</th>
                    <th class="celda" rowspan="2">{{'Libro(s)'}}</th>
                    <th class="celda" colspan="2" rowspan="2">
                        {{'Acciones'}}
                    </th>
                </tr>
                <tr>
                    <th class="celda">{{'Nacimiento'}}</th>
                    <th class="celda">{{'Defunción'}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                <tr>
                    <td class="celda">
                        {{$autor->nombre}}
                    </td>
                    <td class="celda">
                        {{$autor->apellidos??$desconocido}}
                    </td>
                    <td class="celda">
                        {{$autor->nacio??$desconocido}}
                    </td>
                    <td class="celda">
                        {{$autor->murio??$desconocido}}
                    </td>
                    <td class="celda">
                        <ul class="margen-0 pad-0">
                            @forelse ($autor->libros as $libro)
                            <li style="list-style-type:none">
                                <a href="{{route('libros.show', $libro)}}">{{$libro->titulo}}</a>
                            </li>
                            @empty
                            <li style="list-style-type:none">{{'Sin libros disponibles'}}</li>
                            @endforelse
                        </ul>
                    </td>
                    <td class="celda">
                        <button type="button" class="caja-boton bordes-2">
                            <a class="boton-normal" href="{{route('autores.edit', $autor)}}">{{'Editar'}}</a>
                        </button>
                    </td>
                    <td class="celda">
                        <!-- Para borrar necessito un pequeño form pues se utiliza el 'falso method' delete -->
                        <form method="POST" action="{{route('autores.destroy', $autor)}}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="boton-peligro pad-4" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        <div class="texto-c">{{$autores->links()}}</div>
        @else
        <h2 class="texto-c">
            {{$vacio}}
        </h2>
        @endif
    </div>
    @else
    <!-- del isset -->
    <h2 class="texto-c">
        {{$vacio}}
    </h2>
    @endisset
</div>
@endsection
