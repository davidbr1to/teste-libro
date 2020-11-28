<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        return Aluno::all();
    }

    public function show($email)
    {
        return Aluno::find($email);
    }

    public function store(Request $request)
    {
        return Aluno::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->update($request->all());

        return $aluno;
    }

    public function delete(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();

        return 204;
    }
}
