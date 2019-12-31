<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //
    // Tabla asociada. Por defecto sería 'autors'.
    protected $table = 'autores';
    protected $guarded = [];

    /**
     * Devuelve los libros del autor ... si los hay.
     *
     * @return \App\Modelos\Libro
     */
    public function libros()
    {
        return $this->belongsToMany('App\Modelos\Libro', 'autor_libro', 'autor_id', 'libro_id');
    }
}
