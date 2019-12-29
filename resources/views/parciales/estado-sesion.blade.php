@if(session('estado') != null)
<br />
<h2 class="texto-hc fondo-alice">
    {{'Acción de la sesión: '.session('estado')}}
</h2>
@endif
