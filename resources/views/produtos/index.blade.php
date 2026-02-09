<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl mb-4">Produtos</h1>

        <a href="{{ route('produtos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Novo Produto
        </a>

        <table class="w-full mt-4 border">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>

            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->preco }}</td>
                    <td>{{ $produto->estoque }}</td>

                    <td>
                        @if ($produto->estoque <= $produto->estoque_minimo)
                            <span class="text-red-600">⚠️ Baixo</span>
                        @else
                            OK
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('produtos.edit', $produto) }}">Editar</a>

                        <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button>Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>
</x-app-layout>
