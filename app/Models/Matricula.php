<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['cod_matricula', 'aluno_id', 'curso_id'];

    public function aluno(){
        return $this->hasOne('App\Models\Aluno');
    }

    public function curso(){
        return $this->hasOne('App\Models\Curso');
    }
}