<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;

class MatriculaController extends Controller
{
    public function index()
    {
        return Matricula::all();
    }

    public function show($email)
    {
        return Matricula::find($email);
    }

    public function store(Request $request)
    {
        return Matricula::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        $matricula->update($request->all());

        return $matricula;
    }

    public function delete(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();

        return 204;
    }
}
