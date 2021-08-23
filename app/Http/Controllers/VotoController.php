<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use Illuminate\Http\Request;

class VotoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $voto = new Voto;
        $voto->nome = $request->nome;
        $voto->enquete_id = $request->enquete_id;
        $voto->save();
        return redirect("/enquetes/$voto->enquete_id");
    }

    public function show(Voto $voto)
    {
        //
    }

    public function edit(Voto $voto)
    {
        //
    }

    public function update(Request $request, Voto $voto)
    {
        //
    }

    public function destroy(Voto $voto)
    {
        $voto->delete();
        return redirect("/enquetes/$voto->enquete_id");
    }

    public function somar(Voto $voto)
    {
        $soma = $voto->votos;
        $voto->votos = $soma + 1;
        $voto->save();
        return redirect("/");
    }
}
