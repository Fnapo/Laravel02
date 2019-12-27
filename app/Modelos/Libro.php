<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    public function autores()
    {
        return $this->belongsToMany('App\Modelos\Autor', 'autor_libro', 'libro_id', 'autor_id');
    }
}
