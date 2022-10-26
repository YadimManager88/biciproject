<?php

namespace App\Repositories;

use App\Models\sucursal;
use App\Repositories\BaseRepository;

/**
 * Class sucursalRepository
 * @package App\Repositories
 * @version October 15, 2022, 10:18 pm UTC
*/

class sucursalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return sucursal::class;
    }
}
