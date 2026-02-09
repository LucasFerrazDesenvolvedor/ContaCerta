<x-app-layout>
    <div class="p-6">

        <h1>Editar Mesa</h1>

        <form action="{{ route('mesas.update', $mesa) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="nome" value="{{ $mesa->nome }}">

            <select name="status">
                <option value="livre">Livre</option>
                <option value="ocupada">Ocupada</option>
            </select>

            <button class="bg-blue-500 text-white px-4 py-2">
                Atualizar
            </button>

        </form>

    </div>
</x-app-layout>
