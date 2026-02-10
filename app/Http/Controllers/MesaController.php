<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{

    public function show(Mesa $mesa)
    {
        return view('mesas.show', compact('mesa'));
    }

    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index', compact('mesas'));
    }

    public function create()
    {
        return view('mesas.create');
    }

    public function store(Request $request)
    {
        Mesa::create([
            'numero' => $request->numero,
            'status' => 'livre'
        ]);

        return redirect()->route('mesas.index');
    }

    public function edit(Mesa $mesa)
    {
        return view('mesas.edit', compact('mesa'));
    }

    public function update(Request $request, Mesa $mesa)
    {
        $mesa->update($request->all());
        return redirect()->route('mesas.index');
    }

    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
        return redirect()->route('mesas.index');
    }
}
