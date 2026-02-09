<x-app-layout>
    <div class="p-6">

        <h1>Nova Mesa</h1>

        <form action="{{ route('mesas.store') }}" method="POST">
            @csrf

            <input type="text" name="nome" placeholder="Nome da Mesa" required>

            <button class="bg-green-500 text-white px-4 py-2">
                Salvar
            </button>

        </form>

    </div>
</x-app-layout>
