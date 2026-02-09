<x-app-layout>
    <div class="p-6">

        <h1>Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto) }}" method="POST">
            @csrf
            @method('PUT')

            <input name="nome" value="{{ $produto->nome }}">

            <input name="preco" type="number" step="0.01" value="{{ $produto->preco }}">

            <input name="estoque" type="number" value="{{ $produto->estoque }}">

            <input name="estoque_minimo" type="number" value="{{ $produto->estoque_minimo }}">

            <button class="bg-blue-500 text-white px-4 py-2">
                Atualizar
            </button>

        </form>

    </div>
</x-app-layout>
