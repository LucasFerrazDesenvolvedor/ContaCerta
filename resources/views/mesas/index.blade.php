<x-app-layout>
    <div class="p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">🍽️ Mesas</h1>

            <a href="{{ route('mesas.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                + Nova Mesa
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-xl overflow-hidden">

            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4">Nome</th>
                        <th class="p-4">Número</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mesas as $mesa)
                        <tr class="border-t hover:bg-gray-50 transition">

                            <td class="p-4 font-semibold">{{ $mesa->id }}</td>

                            <td class="p-4">{{ $mesa->nome }}</td>

                            <td class="p-4">{{ $mesa->numero }}</td>

                            <td class="p-4">
                                @if ($mesa->status == 'livre')
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                        Livre
                                    </span>
                                @else
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                        Ocupada
                                    </span>
                                @endif
                            </td>

                            <td class="p-4 text-center space-x-2">

                                <a href="{{ route('mesas.edit', $mesa->id) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                                    Editar
                                </a>

                                <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        Excluir
                                    </button>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>
</x-app-layout>
