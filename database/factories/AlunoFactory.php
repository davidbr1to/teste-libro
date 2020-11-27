<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'sexo' => $this->faker->randomElement($array = array ('M','F')),
            'data_nascimento' => $this->faker->date($format = 'd-m-y', $max = 'now'),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Aluno $aluno){
            //
        })->afterCreating(function (Aluno $aluno){
            //
        });
    }
}
