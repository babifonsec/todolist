<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        return view('lista.create');
    }

    public function store(Request $request)
    {
        $obj = new Lista();
        $obj->nome = $request->nome;
        $obj->descricao = $request->descricao;
        $obj->id_user = $request->id_user;

        $obj->save();

        return redirect()->route('lista.create');
    }

    public function edit(Request $request, $id)
    {
        $obj = Lista::findOrFail($id);
        return view('lista.edit', ['lista' => $obj]);
    }

    public function update(Request $request, $id)
    {
        $obj = Lista::findOrFail($id);
        $obj->nome = $request->nome;
        $obj->descricao = $request->descricao;
        $obj->id_user = $request->id_user;

        $obj->save();

        return redirect()->route('lista.edit');
    }
    public function delete($id)
    {
        $obj = Lista::findOrFail($id);
        $obj->delete();

        return redirect()->route('home');
    }
}
