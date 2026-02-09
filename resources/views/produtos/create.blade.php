<x-app-layout>
    <div class="p-6">

        <h1>Novo Produto</h1>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf

            <input name="nome" placeholder="Nome">

            <input name="preco" type="number" step="0.01" placeholder="Preço">

            <input name="estoque" type="number" placeholder="Estoque Inicial">

            <input name="estoque_minimo" type="number" placeholder="Estoque mínimo">

            <button class="bg-green-500 text-white px-4 py-2">
                Salvar
            </button>

        </form>

    </div>
</x-app-layout>
