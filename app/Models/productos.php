<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productos
 * @package App\Models
 * @version October 14, 2022, 5:18 pm UTC
 *
 * @property integer $cod_producto
 * @property string $nombre_producto
 * @property integer $cantidad_producto
 * @property number $precio_producto
 */
class productos extends Model
{
    use SoftDeletes;

    use HasFactory;

   public function sucursals(){
       return $this->belongsTo(sucursal::class,'id_sucursals');
    }

    

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cod_producto',
        'nombre_producto',
        'cantidad_producto',
        'precio_producto',
        'id_sucursals'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cod_producto' => 'integer',
        'nombre_producto' => 'string',
        'cantidad_producto' => 'integer',
        'precio_producto' => 'double',
        'id_sucursals'  => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cod_producto' => 'required',
        'nombre_producto' => 'required',
        'cantidad_producto' => 'required',
        'precio_producto' => 'required',
        'id_sucursals' => 'required'
    ];

    
}
