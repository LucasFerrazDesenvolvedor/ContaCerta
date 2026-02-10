<x-app-layout>
    <div class="p-6">

        <h1>Detalhes da Mesa</h1>

        <p><strong>Nome/Número:</strong> {{ $mesa->numero }}</p>
        <p><strong>Status:</strong> {{ $mesa->status }}</p>

        <a href="{{ route('mesas.index') }}">
            Voltar
        </a>

    </div>
</x-app-layout>
