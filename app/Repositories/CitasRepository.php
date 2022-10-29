<?php

namespace App\Repositories;

use App\Models\Citas;
use App\Repositories\BaseRepository;

/**
 * Class CitasRepository
 * @package App\Repositories
 * @version October 26, 2022, 11:47 pm UTC
*/

class CitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_cliente',
        'tipo_cita',
        'descrip_cita',
        'fecha_cita'
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
        return Citas::class;
    }
}
