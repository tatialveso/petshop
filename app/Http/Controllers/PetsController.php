<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index() {
        $pets = \App\Pet::all();
        $owners = \App\Owner::all();

        return view('petsIndex', compact('pets', 'owners'));
    }

    public function create() {
        $owners = \App\Owner::all();
        return view('petsCreate', compact('owners'));
    }

    public function store(Request $request) {
        $dados = $request->all();

        $pet = new \App\Pet();
        $pet->name = $dados['name'];
        $pet->rga = $dados['RGA'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];

        $pet->save();

        return redirect('pets');
    }

    public function edit(Request $request, $id) {
        $owners = \App\Owner::all();
        $pet = \App\Pet::find($id);
        return view('petsEdit', compact('pet', 'owners'));
    }

    public function update(Request $request, $id) {
        $dados = $request->all();

        $pet = \App\Pet::find($id);
        $pet->name = $dados['name'];
        $pet->rga = $dados['RGA'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];

        $pet->save();

        return redirect('pets');
    }

    public function destroy(Request $request, $id) {
        $pet = \App\Pet::find($id);
        $pet->delete();

        return back();
    }

}
