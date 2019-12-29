@csrf
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody>
            <tr class="alto-2 margen-r">
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Nombre:</label>
                </td>
                <td class="texto-hl">
                    <input class="ancho-20 fondo-v fuente-20" type="text" name="nombre"
                        value="{{old('nombre', $autor['nombre'])}}" placeholder="Nombre del autor ...">
                </td>
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Apellidos:</label>
                </td>
                <td class="texto-hl">
                    <input class="ancho-30 fondo-v alineado-v fuente-20" name="apellidos"
                        value="{{old('apellidos', $autor['apellidos'])}}" placeholder="Apellidos del autor ...">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('nombre')}}</strong>
                    </label>
                </td>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('apellidos')}}</strong>
                    </label>
                </td>
            </tr>
            <tr class="alto-2 margen-r">
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Nacimiento:</label>
                </td>
                <td class="texto-hl">
                    <input type="number" class="ancho-5 fondo-v alineado-v fuente-20" name="nacio"
                        value="{{old('nacio', $autor['nacio'])}}">
                </td>
                <td>
                    <label class="ancho-10 texto-hc fondo-alice fuente-20-bold margen-0">Defunción:</label>
                </td>
                <td class="texto-hl">
                    <input type="number" class="ancho-5 fondo-v alineado-v fuente-20" name="murio"
                        value="{{old('murio', $autor['murio'])}}">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('nacio')}}</strong>
                    </label>
                </td>
                <td colspan="2" class="texto-hc color-r">
                    <label>
                        <strong>{{$errors->first('murio')}}</strong>
                    </label>
                </td>
            </tr>
            <tr class="alto-3">
                <td colspan="4" class="texto-hc fuente-20-bold">
                    {{'Estos datos se guardarán en una BD.'}}
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <input class="ancho-15 boton-normal" type="submit">
                </td>
                <td colspan="1">
                    <input class="ancho-15 boton-normal" type="reset">
                </td>
            </tr>
        </tfoot>
    </table>
</div>
