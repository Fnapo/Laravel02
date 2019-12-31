<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Condición para ver los usuarios.
     *
     * @return bool
     */
    public function checkAdmin()
    {
        $roles = ['admin'];

        //foreach ($this->roles as $role)
        {
            if (in_array($this->role->key, $roles)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Condición para entrar en la Biblioteca.
     *
     * Prefiero la duplicación para mejor mantenimiento y comprensión.
     *
     * @return bool
     */
    public function checkBiblio()
    {
        $roles = ['biblio'];

        // foreach ($this->roles as $role)
        {
            if (in_array($this->$role->key, $roles)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Método que muestra el Role asociado
     *
     * @return App\Modelos\Role
     */
    public function role()
    {
        return $this->belongsTo('App\Modelos\Role', 'role_id');
        // role_id pertenece a User, es innecesario con este formato.
    }
}
