<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caracteristica
 *
 * @property $id
 * @property $nombre
 * @property $detalle
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Domo[] $domos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caracteristica extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'detalle' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','detalle','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domos()
    {
        return $this->hasMany('App\Models\Domo', 'caracteristicas_id', 'id');
    }
    

}
