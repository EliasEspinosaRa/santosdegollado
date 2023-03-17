<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $edad
 * @property $grupo
 * @property $maestro_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro $maestro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'edad' => 'required',
		'grupo' => 'required',
		'maestro_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','edad','grupo','maestro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestro()
    {
        return $this->hasOne('App\Models\Maestro', 'id', 'maestro_id');
    }
    

}
