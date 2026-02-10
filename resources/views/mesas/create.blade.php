<x-app-layout>
    <div class="p-6">

        <h1>Criar Mesa</h1>

        <form method="POST" action="{{ route('mesas.store') }}">
            @csrf

            <input type="text" name="numero" placeholder="Número da Mesa" required>
            <input type="text" name="nome" placeholder="Nome da Mesa" required>

            <button type="submit">
                Cadastrar
            </button>

        </form>

    </div>
</x-app-layout>
