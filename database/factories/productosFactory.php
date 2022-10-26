<?php

namespace Database\Factories;

use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class productosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_producto' => $this->faker->randomDigitNotNull,
        'nombre_producto' => $this->faker->word,
        'cantidad_producto' => $this->faker->randomDigitNotNull,
        'precio_producto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
