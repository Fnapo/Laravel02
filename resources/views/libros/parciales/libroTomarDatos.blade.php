@csrf
<div>
    <?php
    $autoresLibro=(is_null($libro) ? [] : $libro->autores->modelKeys());
    $noAutores=App\Modelos\Autor::all()->sortBy('nombre')->sortBy('apellidos')->except($autoresLibro)->modelKeys();
    ?>
</div>
<div>
    <select name="otro[]" multiple>
        <option value="-1" selected>Ninguno</option>
        <option disabled>{{'-------'}}</option>
        @foreach ($noAutores as $autor)
        <?php $dato=App\Modelos\Autor::find($autor);?>
        <option value="{{$autor}}">
            {{$dato->apellidos}} {{$dato->nombre}}
        </option>
        @endforeach
    </select>
</div>
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody>
            <tr>
                <td>
                    <label class="ancho-10 texto-hc fondo-naranja fuente-20-bold margen-0">Título del Libro:</label>
                </td>
                <td>
                    <input class="ancho-20 fondo-verdeMarOscuro fuente-20" type="text" name="titulo"
                        value="{{old('titulo', $libro['titulo'])}}" placeholder="Título ...">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('titulo')}}</strong>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="ancho-10 texto-hc fondo-naranja fuente-20-bold margen-0">Ejemplares Obtenidos:</label>
                </td>
                <td class="texto-hl">
                    <input type="number" class="ancho-5 fondo-verdeMarOscuro margen alineado-v fuente-20" name="obtenidos"
                        value="{{old('obtenidos', $libro['obtenidos'])}}">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('obtenidos')}}</strong>
                    </label>
                </td>
            </tr>
            @if ($libro != null)
            <tr>
                <td>
                    <label class="ancho-10 texto-hc fondo-naranja fuente-20-bold margen-0">Ejemplares Disponibles:</label>
                </td>
                <td class="texto-hl">
                    <input type="number" class="ancho-5 fondo-verdeMarOscuro margen alineado-v fuente-20" name="disponibles"
                        value="{{old('disponibles', $libro['disponibles'])}}">
                </td>
                @endif
            </tr>
            <tr>
                @if ($libro != null)
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('disponibles')}}</strong>
                    </label>
                </td>
                @endif
            </tr>
            <tr class="alto-3">
                <td colspan="2" class="texto-hc fuente-20-bold">
                    {{'Estos datos se guardarán en una BD.'}}
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input class="ancho-15 boton-normal" type="submit">
                </td>
            </tr>
        </tfoot>
    </table>
</div>
