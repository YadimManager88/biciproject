<?php

namespace Database\Factories;

use App\Models\Citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_cliente' => $this->faker->word,
        'tipo_cita' => $this->faker->word,
        'descrip_cita' => $this->faker->word,
        'fecha_cita' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
