<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    public function index()
    {
        $enquetes = Enquete::all();
        return view('enquetes.index',[
            'enquetes' => $enquetes,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $enquete = new Enquete;
        $enquete->nome = $request->nome;
        $enquete->datafim = $request->datafim;
        $enquete->save();
        return redirect("/");
    }

    public function show(Enquete $enquete)
    {
        return view('enquetes.show',[
            'enquete' => $enquete
        ]);
    }

    public function edit(Enquete $enquete)
    {
        return view('enquetes.edit',[
            'enquete' => $enquete
        ]);
    }

    public function update(Request $request, Enquete $enquete)
    {
        $enquete->nome = $request->nome;
        $enquete->datafim = $request->datafim;
        $enquete->save();
        return redirect("/");
    }

    public function destroy(Enquete $enquete)
    {
        $$enquete->delete();
        return redirect("/");
    }
}
