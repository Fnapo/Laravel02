@extends('plantilla')

@section('titulo')
@lang('Users')
@endsection

@section('contenido')
<div>
    <?php $vacio = "Sin usuarios para mostrar"; ?>
    <h1 class="texto-c">{{__('Users')}}</h1>
    <br />
    @auth
    <div class="texto-c">
        <button class="caja-boton bordes-2">
            <a class="boton-normal" href="{{route('usuarios.create')}}">{{'Crear un usuario'}}</a>
        </button>
    </div>
    <br />
    @endauth
    @isset($usuarios)
    <div class="centraTabla">
        <table class="tabla tabla-i-b colapsada">
            <thead>
                <tr>
                    <th class="celda">{{'Nombre usuario'}}</th>
                    <th class="celda">{{'Email'}}</th>
                    <th class="celda">{{'Role'}}</th>
                    <th class="celda" colspan="2">
                        {{'Acciones'}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td class="celda">
                        {{$usuario->name}}
                    </td>
                    <td class="celda">
                        {{$usuario->email}}
                    </td>
                    <td class="celda">
                        {{$usuario->role->funcion}}
                    </td>
                    <td class="celda">
                        <button type="button" class="caja-boton bordes-2">
                            <a class="boton-normal" href="{{route('usuarios.edit', $usuario->id)}}">{{'Editar'}}</a>
                        </button>
                    </td>
                    <td class="celda">
                        <!-- Para borrar necessito un pequeño form pues se utiliza el 'falso method' delete -->
                        <form method="POST" action="{{route('usuarios.destroy', $usuario->id)}}">
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
        <div class="texto-c">{{$usuarios->links()}}</div>
    </div>
    @else
    <!-- del isset -->
    <h2>
        {{$vacio}}
    </h2>
    @endisset
</div>
@endsection
