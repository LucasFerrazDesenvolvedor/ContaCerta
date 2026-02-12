<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class CardapioController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('categoria')
            ->orderBy('nome')
            ->get(); // 🔥 SEM groupBy

        return view('cardapio.index', compact('produtos'));
    }
}
