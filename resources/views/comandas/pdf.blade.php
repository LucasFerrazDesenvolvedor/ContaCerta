<h2>Comanda #{{ $comanda->id }}</h2>

<p>Mesa: {{ $comanda->mesa->nome }}</p>

<hr>

@foreach ($comanda->itens as $item)
    <p>
        {{ $item->produto->nome }}
        x{{ $item->quantidade }}
        - R$ {{ $item->preco * $item->quantidade }}
    </p>
@endforeach

<hr>

<h3>Total: R$ {{ $comanda->total }}</h3>
<p>Pagamento: {{ $comanda->forma_pagamento }}</p>
