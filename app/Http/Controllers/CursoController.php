<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function show($email)
    {
        return Curso::find($email);
    }

    public function store(Request $request)
    {
        return Curso::create($request->all());

    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);
        $curso->update($request->all());

        return $curso;
    }

    public function delete(Request $request, $id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return 204;
    }
}
