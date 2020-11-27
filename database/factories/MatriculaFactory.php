<?php

namespace Database\Factories;

use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matricula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_matricula' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Matricula $matricula){

        })->afterCreating(function (Matricula $matricula){
            $email = Aluno::factory()->make();
            $matricula->alunos()->save($email);

            $titulo = Curso::factory()->make();
            $matricula->cursos()->save($titulo);
        });
    }
}