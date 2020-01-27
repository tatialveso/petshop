<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnersController extends Controller
{
    public function index() {
        $owners = \App\Owner::all();
        $pets= \App\Pet::all();

        // compact transforma os dados em um array/formatado
        return view('ownersIndex', compact('owners', 'pets'));
    }

    public function create() {
        $pets = \App\Pet::all();
        return view('ownersCreate', compact('pets'));
    }

    public function store(Request $request) {
        $dados = $request->all();

        $owner = new \App\Owner();
        $owner->name = $dados['name'];
        $owner->telefone = $dados['telefone'];
        $owner->pet_id = $dados['pet_id'];

        $owner->save();

        return redirect('owners');
    }

    public function edit(Request $request, $id) {
        $pets = \App\Pet::all();
        $owners = \App\Owner::find($id);
        return view('ownersEdit', compact('pets', 'owners'));
    }

    public function update(Request $request, $id) {
        $dados = $request->all();

        $owner = \App\Owner::find($id);
        $owner->name = $dados['name'];
        $owner->telefone = $dados['telefone'];
        $owner->pet_id = $dados['pet_id'];

        $owner->save();

        return redirect('owners');
    }

    public function destroy(Request $request, $id) {
        $owner = \App\Owner::find($id);
        $owner->delete();

        return back();
    }
}
