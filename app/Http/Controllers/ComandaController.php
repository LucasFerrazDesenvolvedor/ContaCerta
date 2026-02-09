<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Produto;
use App\Models\ComandaItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function adicionarItem(Request $request)
    {
        $comanda = Comanda::find($request->comanda_id);
        $produto = Produto::find($request->produto_id);

        $quantidade = $request->quantidade;

        if ($produto->estoque < $quantidade) {
            return back()->with('error', 'Sem estoque!');
        }

        ComandaItem::create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'quantidade' => $quantidade,
            'preco' => $produto->preco
        ]);

        // soma total
        $comanda->total += $produto->preco * $quantidade;
        $comanda->save();

        // baixa estoque
        $produto->estoque -= $quantidade;
        $produto->save();

        return back();
    }

    public function fechar(Request $request, $id)
    {
        $comanda = Comanda::findOrFail($id);

        $comanda->status = 'fechada';
        $comanda->forma_pagamento = $request->forma_pagamento;
        $comanda->fechada_em = now();
        $comanda->save();

        return redirect()->route('comandas.index')
            ->with('success', 'Comanda fechada!');
    }

    public function imprimir($id)
    {
        $comanda = Comanda::with('itens.produto', 'mesa')
            ->findOrFail($id);

        $pdf = Pdf::loadView('comandas.pdf', compact('comanda'));

        return $pdf->download('comanda.pdf');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comanda = Comanda::create([
            'mesa_id' => $request->mesa_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('comandas.show', $comanda);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
