<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class sucursal
 * @package App\Models
 * @version October 15, 2022, 10:18 pm UTC
 *
 * @property string $name
 */
class sucursal extends Model
{
    use SoftDeletes;

    use HasFactory;

   public function productos(){
  return $this->hasMany(productos::class,'id');
    }

    public $table = 'sucursals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
