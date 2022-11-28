<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Domo
 *
 * @property $id
 * @property $nombredomo
 * @property $descripcion
 * @property $tipodomo
 * @property $caracteristicas_id
 * @property $capacidad
 * @property $numerobaños
 * @property $created_at
 * @property $updated_at
 *
 * @property Agenda[] $agendas
 * @property Caracteristica $caracteristica
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Domo extends Model
{
    
    static $rules = [
		'nombredomo' => 'required',
		'descripcion' => 'required',
		'tipodomo' => 'required',
		'caracteristicas_id' => 'required',
		'capacidad' => 'required',
		'numerobaños' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombredomo','descripcion','tipodomo','caracteristicas_id','capacidad','numerobaños'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agendas()
    {
        return $this->hasMany('App\Models\Agenda', 'domo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caracteristica()
    {
        return $this->hasOne('App\Models\Caracteristica', 'id', 'caracteristicas_id');
    }
    

}
