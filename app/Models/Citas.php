<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas
 * @package App\Models
 * @version October 26, 2022, 11:47 pm UTC
 *
 * @property string $nom_cliente
 * @property string $tipo_cita
 * @property string $descrip_cita
 * @property string $fecha_cita
 */
class Citas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public function users()
    {
        return $this->belongsTo(sucursal::class, 'id_users');
    }

    public $table = 'citas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_cliente',
        'tipo_cita',
        'descrip_cita',
        'fecha_cita',
        'id_users',
        'id_sucursals'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom_cliente' => 'string',
        'tipo_cita' => 'string',
        'descrip_cita' => 'string',
        'fecha_cita' => 'string',
        'id_users' => 'integer',
        'id_sucursals' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descrip_cita' => 'required'
    ];
}
