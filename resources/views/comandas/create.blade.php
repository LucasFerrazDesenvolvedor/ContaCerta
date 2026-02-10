<x-app-layout>
    <div class="p-8">

        <h1 class="text-2xl font-bold mb-6">🧾 Abrir Comanda</h1>

        <form method="POST" action="{{ route('comandas.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 font-bold">Mesa</label>

                <select name="mesa_id" class="border rounded p-3 w-full">
                    @foreach ($mesas as $mesa)
                        <option value="{{ $mesa->id }}">
                            Mesa {{ $mesa->numero }} - {{ $mesa->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded">
                Abrir Comanda
            </button>

        </form>


    </div>
</x-app-layout>
