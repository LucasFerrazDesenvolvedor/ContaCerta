<x-app-layout>
    <div class="p-6">

        <h1>Detalhes do Produto</h1>

        <p><strong>Nome:</strong> {{ $produto->nome }}</p>
        <p><strong>Preço:</strong> R$ {{ $produto->preco }}</p>
        <p><strong>Estoque:</strong> {{ $produto->estoque }}</p>
        <p><strong>Estoque mínimo:</strong> {{ $produto->estoque_minimo }}</p>

        <a href="{{ route('produtos.index') }}">
            Voltar
        </a>

    </div>
</x-app-layout>
