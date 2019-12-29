@csrf
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody>
            <tr class="alto-2 margen-r">
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Título del Libro:</label>
                </td>
                <td>
                    <input class="ancho-20 fondo-v fuente-20" type="text" name="titulo"
                        value="{{old('titulo', $libro['titulo'])}}" placeholder="Título ...">
                </td>
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Ejemplares obtenidos:</label>
                </td>
                <td>
                    <input type="number" class="ancho-5 fondo-v margen alineado-v fuente-20" name="obtenidos"
                        value="{{old('obtenidos', $libro['obtenidos'])}}">
                </td>
                @if ($libro != null)
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Ejemplares Disponibles:</label>
                </td>
                <td>
                    <input type="number" class="ancho-5 fondo-v margen alineado-v fuente-20" name="disponibles"
                        value="{{old('disponibles', $libro['disponibles'])}}">
                </td>
                @endif
            </tr>
            <tr>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('titulo')}}</strong>
                    </label>
                </td>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('obtenidos')}}</strong>
                    </label>
                </td>
                @if ($libro != null)
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('disponibles')}}</strong>
                    </label>
                </td>
                @endif
            </tr>
            <tr class="alto-3">
                <td colspan="{{$libro != null ? 6 : 4}}" class="texto-hc fuente-20-bold">
                    {{'Estos datos se guardarán en una BD.'}}
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input class="ancho-15 boton-normal" type="submit">
                </td>
                <td colspan="{{$libro != null ? 4 : 2}}">
                    <input class="ancho-15 boton-normal" type="reset">
                </td>
            </tr>
        </tfoot>
    </table>
</div>
