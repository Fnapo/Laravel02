@csrf
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody>
            <tr class="alto-2 margen-r">
                <td>
                    <label class="ancho-20 texto-c fondo-alice fuente-20-bold">Título del Proyecto:</label>
                </td>
                <td>
                    <input class="ancho-20 fondo-v fuente-20" type="text" name="titulo"
                        value="{{old('titulo', $proyecto['titulo'])}}" placeholder="Título ...">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-c color-r">
                    <label>{{$errors->first('titulo')}}</label>
                </td>
            </tr>
            <tr class="alto-3 margen-r">
                <td>
                    <label class="ancho-20 texto-c fondo-alice fuente-20-bold">Descripción del Proyecto:</label>
                </td>
                <td>
                    <textarea class="ancho-20 fondo-v margen alineado-v fuente-20" name="descripcion"
                        placeholder="Descripción ...">{{$proyecto == null
                        ? old('descripcion') : old('descripcion', $proyecto['descripcion'])}}</textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-c color-r">
                    <label>{{$errors->first('descripcion')}}</label>
                </td>
            </tr>
            <tr class="alto-3">
                <td colspan="2" class="texto-c fuente-20-bold">
                    {{'Estos datos se guardarán en una BD.'}}
                </td>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody class="texto-c">
            <tr>
                <td>
                    <input class="ancho-15 boton-normal" type="submit">
                </td>
                <td>
                    <input class="ancho-15 boton-normal" type="reset">
                </td>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>
