<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Matricula::factory()
                ->times(25)
                ->has(Aluno::factory()->count(1))
                ->has(Curso::factory()->count(1))
                ->create();
    }
}
