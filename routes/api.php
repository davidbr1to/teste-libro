<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Models\Aluno;

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

Route::get('alunos', function(){
    return Aluno::all();
});

Route::get('alunos/{email}', function($email){
    return Aluno::find($email);
});

Route::post('alunos', function(Request $request){
    return Aluno::create($request->all());
});

Route::put('alunos/{id}', function(Request $request, $id) {
    $aluno = Aluno::findOrFail($id);
    $aluno->update($request->all());

    return $aluno;
});

Route::delete('alunos/{id}', function($id) {
    Aluno::find($id)->delete();

    return 204;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('alunos', 'App\Http\Controllers\AlunoController@index');
Route::get('alunos/{id}', 'App\Http\Controllers\AlunoController@show');
Route::post('alunos', 'App\Http\Controllers\AlunoController@store');
Route::put('alunos/{id}', 'App\Http\Controllers\AlunoController@update');
Route::delete('articles/{id}', 'App\Http\Controllers\AlunoController@delete');