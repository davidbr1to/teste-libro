<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Models\Aluno;
use App\Http\Controllers\CursoController;
use App\Models\Curso;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('alunos', 'App\Http\Controllers\AlunoController@index');
Route::get('alunos/{email}', 'App\Http\Controllers\AlunoController@show');
Route::post('alunos/', 'App\Http\Controllers\AlunoController@store');
Route::put('alunos/{email}', 'App\Http\Controllers\AlunoController@update');
Route::delete('articles/{email}', 'App\Http\Controllers\AlunoController@delete');
Route::get('cursos', 'App\Http\Controllers\CursoController@index');
Route::get('cursos/{id}', 'App\Http\Controllers\CursoController@show');
Route::post('cursos/', 'App\Http\Controllers\CursoController@store');
Route::put('cursos/{id}', 'App\Http\Controllers\CursoController@update');
Route::delete('cursos/{id}', 'App\Http\Controllers\CursoController@delete');
Route::get('matriculas', 'App\Http\Controllers\MatriculaController@index');
Route::get('matriculas/{id}', 'App\Http\Controllers\MatriculaController@show');
Route::post('matriculas/', 'App\Http\Controllers\MatriculaController@store');
Route::put('matriculas/{id}', 'App\Http\Controllers\MatriculaController@update');
Route::delete('matriculas/{id}', 'App\Http\Controllers\MatriculaController@delete');