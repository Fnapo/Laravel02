@extends('plantilla')

@section('titulo', 'Libros')

@section('contenido')
<div>
    <?php $vacio = "Sin libros para mostrar"; ?>
    <h1 class="texto-c">{{'Libros'}}</h1>
    <br />
    <div class="texto-c">
        <button class="caja-boton bordes-2">
            <a class="boton-normal" href="{{route('libros.create')}}">{{'Adquirir un libro'}}</a>
        </button>
    </div>
    <br />
    @isset($libros)
    <div class="centraTabla">
        @if ($libros->count() > 0)
        <table class="tabla tabla-i-b colapsada">
            <thead>
                <tr>
                    <th class="celda" rowspan="2">{{'Título del libro'}}</th>
                    <th class="celda" colspan="2">{{'Ejemplares'}}</th>
                    <th class="celda" rowspan="2">{{'Autor(es)'}}</th>
                    <th class="celda" colspan="2" rowspan="2">
                        {{'Acciones'}}
                    </th>
                </tr>
                <tr>
                    <th class="celda">{{'Obtenidos'}}</th>
                    <th class="celda">{{'Disponibles'}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr>
                    <td class="celda">
                        {{$libro->titulo}}
                    </td>
                    <td class="celda">
                        {{$libro->obtenidos}}
                    </td>
                    <td class="celda">
                        {{$libro->disponibles}}
                    </td>
                    <td class="celda">
                        <ul class="margen-0 pad-0">
                            @forelse ($libro->autores as $autor)
                            <li style="list-style-type:none">
                                <a href="{{route('autores.show', $autor)}}">
                                    {{$autor->nombre.' '.$autor->apellidos}}</a>
                            </li>
                            @empty
                            <li style="list-style-type:none">{{'Anónimo'}}</li>
                            @endforelse
                        </ul>
                    </td>
                    <td class="celda">
                        <button type="button" class="caja-boton bordes-2">
                            <a class="boton-normal" href="{{route('libros.edit', $libro)}}">{{'Editar'}}</a>
                        </button>
                    </td>
                    <td class="celda">
                        <form method="POST" action="{{route('libros.destroy', $libro)}}">
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
        <div class="texto-c">{{$libros->links()}}</div>
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
