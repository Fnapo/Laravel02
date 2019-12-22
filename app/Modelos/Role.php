<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user()
    {
        return $this->hasMany('App\User', 'role_id');
        // role_id pertenece a User, es innecesario con este formato.
    }
}
