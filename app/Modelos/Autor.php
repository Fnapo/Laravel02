<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //
    // Tabla asociada.
    protected $table = 'autores';

    public function libros()
    {
        return $this->belongsToMany('App\Modelos\Libro', 'autor_libro', 'autor_id', 'libro_id');
    }
}
