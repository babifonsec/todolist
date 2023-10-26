<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        return view('tarefa.index');
    }

    public function create(Request $request)
    {
        return view('tarefa.create');
    }

    public function store(Request $request)
    {
        $obj = new Tarefa();
        $obj->titulo = $request->titulo;
        $obj->descricao = $request->descricao;
        $obj->dataCriacao = $request->dataCriacao;
        $obj->dataConclusao = $request->dataConclusao;
        $obj->status = $request->status;
        $obj->id_lista = $request->is_lista;

        $obj->save();

        return redirect()->route('tarefa.create');
    }

    public function edit($id)
    {
        $obj = Tarefa::findOrFail($id);
        return view('tarefa.edit', ['lista' => $obj]);
    }

    public function update(Request $request, $id)
    {
        $obj = Tarefa::findOrFail($id);
        $obj->titulo = $request->titulo;
        $obj->descricao = $request->descricao;
        $obj->dataCriacao = $request->dataCriacao;
        $obj->dataConclusao = $request->dataConclusao;
        $obj->status = $request->status;
        $obj->id_lista = $request->is_lista;

        $obj->save();

        return redirect()->route('tarefa.edit');
    }
    public function delete($id)
    {
        $obj = Tarefa::findOrFail($id);
        $obj->delete();

        return redirect()->route('home');
    }
}
