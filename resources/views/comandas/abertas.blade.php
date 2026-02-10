<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Comandas Abertas</h2>

    @foreach ($comandas as $comanda)
        <div>
            Mesa: {{ $comanda->mesa_id }} | Total: R$ {{ $comanda->total }}
        </div>
    @endforeach
</x-app-layout>
