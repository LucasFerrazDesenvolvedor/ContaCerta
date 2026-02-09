<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl mb-4">Mesas</h1>

        <a href="{{ route('mesas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Nova Mesa
        </a>

        <table class="mt-4 w-full border">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>

            @foreach ($mesas as $mesa)
                <tr>
                    <td>{{ $mesa->id }}</td>
                    <td>{{ $mesa->nome }}</td>
                    <td>{{ $mesa->status }}</td>
                    <td>
                        <a href="{{ route('mesas.edit', $mesa) }}">Editar</a>

                        <form action="{{ route('mesas.destroy', $mesa) }}" method="POST" style="display:inline">
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
