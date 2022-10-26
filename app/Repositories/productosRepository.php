<?php

namespace App\Repositories;

use App\Models\productos;
use App\Repositories\BaseRepository;

/**
 * Class productosRepository
 * @package App\Repositories
 * @version October 14, 2022, 5:18 pm UTC
*/

class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_producto',
        'nombre_producto',
        'cantidad_producto',
        'precio_producto'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productos::class;
    }
}
