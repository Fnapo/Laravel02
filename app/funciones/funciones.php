<?php

/**
 * Función para desactivar links,
 * @param string
 * @return string
 * No se puede (o no es conveniente) utilizar la semántica de Laravel
 *
 */

function desActivar(string $nombre = "home")
{
    return (\Route::currentRouteName() == $nombre ? 'desactivado active' : 'color-az');
}

/*
Cambia como obtener el nombre de la ruta actual, se hace con \Route::current()->getName()
o \Route::currentRouteName()
Route esta definida en \vendor\laravel\...\Route.php como hija de la clase static Facade
 */
