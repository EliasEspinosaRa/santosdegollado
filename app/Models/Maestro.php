<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $edad
 * @property $grupos
 * @property $created_at
 * @property $updated_at
 * @property Alumno[] $alumnos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */ 
class Maestro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'edad' => 'required',
		'grupos' => 'required',
    //'email' =>'required',
    //'password' =>'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','edad','grupos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'maestro_id', 'id');
    }
    

}
