<x-app-layout>
    <div class="p-6">

        <h1>Comanda #{{ $comanda->id }}</h1>

        <h2>Total: R$ {{ $comanda->total }}</h2>

        <form method="POST" action="{{ route('comandas.addItem') }}">
            @csrf

            <input type="hidden" name="comanda_id" value="{{ $comanda->id }}">

            <select name="produto_id">
                @foreach (\App\Models\Produto::all() as $produto)
                    <option value="{{ $produto->id }}">
                        {{ $produto->nome }}
                    </option>
                @endforeach
            </select>

            <input type="number" name="quantidade" placeholder="Qtd">

            <button>Adicionar</button>
        </form>

        <hr>

        @foreach ($comanda->itens as $item)
            <p>
                {{ $item->produto->nome }}
                x{{ $item->quantidade }}
            </p>
        @endforeach

        <hr>

        <h3>Fechar Comanda</h3>

        <form method="POST" action="{{ route('comandas.fechar', $comanda->id) }}">
            @csrf

            <select name="forma_pagamento">
                <option>Dinheiro</option>
                <option>Cartão</option>
                <option>Pix</option>
            </select>

            <button>Fechar Comanda</button>
        </form>

        <br>

        <a href="{{ route('comandas.imprimir', $comanda->id) }}">
            🖨️ Imprimir Conta
        </a>

    </div>
</x-app-layout>
